<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;




class PostsRepository extends EntityRepository
{
    
    public function findPostsbyid($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Posts p JOIN AppBundle:Categories c WITH p.categoryid = c.categoryid JOIN AppBundle:User u WITH p.userid = u.id WHERE p.postid = :id'
            )->setParameter(':id', $id)->getResult();
            
    }
    public function findPostsbytitlename($name)
    {
        $em = $this->getEntityManager();
        $name = "%".$name."%";
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT * FROM posts p JOIN categories c ON p.categoryid = c.categoryid JOIN fos_user u ON p.userid = u.id WHERE p.posttitle LIKE :id ');
        $statement->bindValue(':id',$name ,"string");
        $statement->execute();
        $postnumber = $statement->fetchAll();
        
        return $postnumber;
            
    }
 
    public function findPostse($id){
        
        $id=$id-1;
        $limit = 3;
        $from = $id*$limit; 
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT * FROM posts p JOIN categories c ON p.categoryid = c.categoryid JOIN fos_user u ON p.userid = u.id LIMIT :from , :limit' );
        $statement->bindValue(':limit',$limit ,"integer");
        $statement->bindValue(':from',$from ,"integer");
        $statement->execute();
        $limitpost = $statement->fetchAll();
        
        return $limitpost;
        
    }
        public function countpost(){

        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT COUNT(postid) as num FROM posts');
        $statement->execute();
        $postnumber = $statement->fetchAll();
        
        return $postnumber;
        
    }
    public function findPostsbycat($id){
        
        $ids=$id-1;
        $limit = 3;
        $from = $id*$limit; 
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT * FROM posts p JOIN categories c ON p.categoryid = c.categoryid JOIN fos_user u ON p.userid = u.id WHERE p.categoryid = :id' );
        $statement->bindValue(':id',$id ,"integer");
        $statement->execute();
        $limitpost = $statement->fetchAll();
        
        return $limitpost;
        
    }
        public function countpostbycat($id){

        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT COUNT(postid) as num FROM posts WHERE categoryid = :id');
        $statement->bindValue(':id',$id ,"integer");
        $statement->execute();
        $postnumber = $statement->fetchAll();
        
        return $postnumber;
        
    }
}
