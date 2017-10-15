<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Posts;


class BlogController extends Controller
{
    
    public function indexAction(Request $request)
    {
        $posts = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->findPosts();
        return $this->render('default/index.html.twig',
                array('posts' => $posts));
    }
}
