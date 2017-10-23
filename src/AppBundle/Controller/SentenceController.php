<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class SentenceController extends Controller
{
    
    public function indexAction()
    {   
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM sentences ORDER BY RAND() LIMIT 1");
        $statement->execute();
        $sentence = $statement->fetchAll();

        
        return $this->render('default/sentence.html.twig',
                array('sentence' => $sentence));
    }
}
