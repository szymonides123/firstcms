<?php 

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;

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
    public function changeroleAction(Request $request,KernelInterface $kernel, $id)
    {
        $user = $this->getDoctrine()
                ->getRepository(User::class)
                ->finduser($id);
        $request = Request::createFromGlobals();
    
        if (isset($_POST['role'])) {
            $application = new Application($kernel);
            $application->setAutoExit(false);
            if($request->get('role')==1)
            {
                $role = 'a:1:{i:0;s:10:"ROLE_ADMIN";}';
            $this->getDoctrine()
                ->getRepository(User::class)
                ->changerole($id, $role);   
            return $this->redirectToRoute('admin_user');
                
            }
            elseif($request->get('role')==2)
            {
                $role = 'a:0:{}';
            $this->getDoctrine()
                ->getRepository(User::class)
                ->changerole($id, $role);  
            return $this->redirectToRoute('admin_user');
            }
            else{
            
            }
            
        
        }
        return $this->render('admin/default/users_edit.html.twig',
                array('users' => $user));
    }
    }


