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
}
