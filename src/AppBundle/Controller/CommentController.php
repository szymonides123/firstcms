<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Comments;


class CommentController extends Controller
{
    
    public function addAction(Request $request, $id)
    {   

       
        $request = Request::createFromGlobals();
        $em = $this->getDoctrine()->getManager();
        $comment = new Comments;
        $comment->setComContent($request->request->get('content'));
        $comment->setComDate(new \DateTime("now"));
        $user = $this->getUser();
        $comment->setUserid($this->getUser());
        $comment->setpostid($id);
        $comment->setIsactive('1');
        $em->persist($comment);
        $em->flush();
        $response = $this->forward('AppBundle:Post:index', array(
        'id'  => $id,
            
        
    ));
    
        return $response;
    }
    

}
