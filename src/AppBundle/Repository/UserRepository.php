<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;




class UserRepository extends EntityRepository
{
    public function findAlluser()
    {
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT * FROM fos_user ');
        $statement->execute();
        $user = $statement->fetchAll();
        
        return $user;    
    }
    
    public function dezactivateuser($id, $value)
    {
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('UPDATE fos_user SET enabled = :value WHERE id =:id ');
        $statement->bindValue(':value',$value ,"integer");
        $statement->bindValue(':id',$id ,"integer");
        $statement->execute();
        
        
        return;    
    }
}
