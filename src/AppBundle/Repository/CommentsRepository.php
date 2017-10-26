<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;




class CommentsRepository extends EntityRepository
{

    public function findCommentsById($id)
    {   
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT * FROM comments c JOIN fos_user u ON c.userid = u.id WHERE c.postid = :id ORDER BY com_date DESC');
        $statement->bindValue(':id',$id ,"integer");
        $statement->execute();
        $comments = $statement->fetchAll();
        
        return $comments;
   
    }
}
