<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;




class CommentsRepository extends EntityRepository
{

    public function findCommentsById($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM AppBundle:Comments c JOIN AppBundle:Users u WITH c.userid = u.userid WHERE c.postid = :id'
            )->setParameter(':id', $id)->getResult();
            
    }
    public function findNestedById($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM AppBundle:Comments c JOIN AppBundle:Users u WITH c.userid = u.userid WHERE c.nestedComid = :id'
            )->setParameter(':id', $id)->getResult();
            
    }
}
