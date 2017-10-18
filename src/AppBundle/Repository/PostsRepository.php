<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;




class PostsRepository extends EntityRepository
{
    
    public function findPostsbyid($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Posts p JOIN AppBundle:Categories c WITH p.categoryid = c.categoryid JOIN AppBundle:Users u WITH p.userid = u.userid WHERE p.postid = :id'
            )->setParameter(':id', $id)->getResult();
            
    }
    
    public function findPostse($id){
        
        $id=$id-1;
        $limit = 3;
        $from = $id*$limit; 
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT * FROM posts p JOIN categories c ON p.categoryid = c.categoryid JOIN users u ON p.userid = u.userid LIMIT :from , :limit' );
        $statement->bindValue(':limit',$limit ,"integer");
        $statement->bindValue(':from',$from ,"integer");
        $statement->execute();
        $limitpost = $statement->fetchAll();
        
        return $limitpost;
        
    }
    
}
