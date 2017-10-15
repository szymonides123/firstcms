<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;




class PostsRepository extends EntityRepository
{
    public function findPosts()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Posts p JOIN AppBundle:Categories c WITH p.categoryid = c.categoryid JOIN AppBundle:Users u WITH p.userid = u.userid'
            )
            ->getResult();
    }
    public function findPostsbyid($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Posts p JOIN AppBundle:Categories c WITH p.categoryid = c.categoryid JOIN AppBundle:Users u WITH p.userid = u.userid WHERE p.postid = :id'
            )->setParameter(':id', $id)->getResult();
            
    }
    
}
