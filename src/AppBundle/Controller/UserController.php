<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Categories;
use AppBundle\Entity\Posts;
use AppBundle\Entity\User;

class UserController extends Controller
{
    
        public function dezactivateAction($id)
    {
            $this->getDoctrine()
                ->getRepository(User::class)
                ->dezactivateuser($id, 0);
        
        return $this->redirectToRoute('admin_user');
    }
    public function activateAction($id)
    {
            $this->getDoctrine()
                ->getRepository(User::class)
                ->dezactivateuser($id ,1 );
        
        return $this->redirectToRoute('admin_user');
    }

}
