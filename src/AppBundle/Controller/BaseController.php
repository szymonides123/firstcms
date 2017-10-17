<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Categories;


class BaseController extends Controller
{
    
    public function indexAction()
    {
        $categories = $this->getDoctrine()
                ->getRepository(Categories::class)
                ->findAll();
        return $this->render('default/menu.html.twig',
                array('categories' => $categories));
    }
}
