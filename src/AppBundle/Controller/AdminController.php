<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Categories;


class AdminController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('admin/default/index.html.twig');
    }
        public function userAction()
    {
        return $this->render('admin/default/users.html.twig');
    }
        public function postAction()
    {
        return $this->render('admin/default/posts.html.twig');
    }

}
