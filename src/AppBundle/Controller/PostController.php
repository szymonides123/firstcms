<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Posts;
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

        $form = $this->createForm(PostForm::class, $this->post);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $this->post->setIsactive(1);
        $this->post->setPostdate(new \DateTime("now"));
        $this->post->setUserid($this->getUser());
        $this->post->setCategoryid(1);
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
        ));
    }
}

