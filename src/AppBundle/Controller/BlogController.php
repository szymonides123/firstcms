<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Posts;


class BlogController extends Controller
{
    
    public function indexAction(Request $request, $id)
    {
        $posts = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->findPostse($id);
        $num = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->countpost();
        return $this->render('default/index.html.twig',
                array('posts' => $posts,
                      'num' => $num
                ));
    }
    public function showAction(Request $request, $id)
    {
        $posts = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->findPostsbycat($id);
        $num = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->countpostbycat($id);
        return $this->render('default/index.html.twig',
                array('posts' => $posts
                ));
    }
    public function searchAction(Request $request)
    {   
        $posts = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->findPostsbytitlename($_GET['search']);

        return $this->render('default/index.html.twig',
                array('posts' => $posts
                ));
    }
}
