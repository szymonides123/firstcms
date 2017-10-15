<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Posts;


class PostController extends Controller
{
    
    public function indexAction(Request $request, $id)
    {
        $posts = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->findPostsbyid($id);
        return $this->render('default/post.html.twig',
                array('posts' => $posts));
    }
}
