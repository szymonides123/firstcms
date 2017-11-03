<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Posts;
use AppBundle\Entity\Categories;
use AppBundle\Entity\Comments;
use AppBundle\Form\PostForm;


class PostController extends Controller
{
    private $post;
    
    public function __construct(Posts $post) {
        $this->post=$post;
    }
    
    public function indexAction(Request $request, $id)
    {
        $posts = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->findPostsbyid($id);
        $comments = $this->getDoctrine()
                ->getRepository(Comments::class)
                ->findCommentsById($id);
        
        return $this->render('default/post.html.twig',
                array('posts' => $posts,
                      'comments'=>$comments
                ));
    }
        public function addAction(Request $request)
    {
        $request = Request::createFromGlobals();

        $categories = $this->getDoctrine()
                ->getRepository(Categories::class)
                ->findAll();
        
        $form = $this->createForm(PostForm::class, $this->post);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $this->post->setIsactive(1);
        $this->post->setPostdate(new \DateTime("now"));
        $this->post->setUserid($this->getUser());
        $this->post->setCategoryid($request->get('category'));
        $file = $this->post->getPostimage();
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move(
                $this->getParameter('img_dir'),
                $fileName
            );
        $this->post->setPostimage($fileName);
        $em->persist($this->post);
        $em->flush();

        return $this->redirect($this->generateUrl(
            'admin_post'));
        }

        return $this->render('admin/default/posts_edit_add.html.twig', array(
            'form' => $form->createView(),
            'categories' => $categories
        ));
    }
    
        public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $post=$em->getRepository('AppBundle:Posts')->delPostById($id);
        
        return $this->redirectToRoute('admin_post');
    }


        public function editAction(Request $request, $id)
    {

            $post = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->find($id);
            $categories = $this->getDoctrine()
                ->getRepository(Categories::class)
                ->findAll();
            $form = $this->createForm(PostForm::class, $this->post);
            
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $file = $this->post->getPostimage();
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move(
                $this->getParameter('img_dir'),
                $fileName
            );
        $em->getRepository('AppBundle:Posts')->updatepost($id, $request->get('category'), $this->getUser()->getId(), $_POST['post_form']['posttitle'], $_POST['post_form']['postcontent'] , $fileName);
        
        return $this->redirectToRoute('admin_post');

            }
        
        return $this->render('admin/default/posts_edit_add.html.twig', array(
            'form' => $form->createView(),
            'categories' => $categories,
            'posts' => $post
        ));
    }
}


