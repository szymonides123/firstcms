<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Categories;
use AppBundle\Entity\Posts;
use AppBundle\Entity\User;

class AdminController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('admin/default/index.html.twig');
    }
        public function userAction()
    {
            $users = $this->getDoctrine()
                ->getRepository(User::class)
                ->findAlluser();
        
        return $this->render('admin/default/users.html.twig',
                array('users' => $users,
                ));
    }
        public function postAction()
    {
            $posts = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->findPostsall();
        
        return $this->render('admin/default/posts.html.twig',
                array('posts' => $posts,
                ));

    }

}
