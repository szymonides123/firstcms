<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="fk_comments_users1_idx", columns={"userid"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentsRepository")
 */
class Comments
{
    /**
     * @var string
     *
     * @ORM\Column(name="com_content", type="string", length=500, nullable=true)
     */
    private $comContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="com_date", type="date", nullable=true)
     */
    private $comDate;

    /**
     * @var string
     *
     * @ORM\Column(name="isactive", type="string", length=45, nullable=true)
     */
    private $isactive;

    /**
     * @var integer
     *
     * @ORM\Column(name="commentid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentid;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="userid")
     * })
     */
    private $userid;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="nested_comid", type="integer")
      */
    
    private $nestedComid;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="postid", type="integer")
    */
    
    private $postid;
    
    function getpostid() {
        return $this->postid;
    }         
    function getNestedComid() {
        return $this->nestedComid;
    }
            
    function getComContent() {
        return $this->comContent;
    }

    function getComDate(): \DateTime {
        return $this->comDate;
    }

    function getIsactive() {
        return $this->isactive;
    }

    function getCommentid() {
        return $this->commentid;
    }

    function getUserid(): \AppBundle\Entity\Users {
        return $this->userid;
    }
    function setpostid($postid) {
        $this->postid = $postid;
    }
    
    function setNestedComid($nestedComid) {
        $this->nestedComid = $nestedComid;
    }
    
    function setComContent($comContent) {
        $this->comContent = $comContent;
    }

    function setComDate(\DateTime $comDate) {
        $this->comDate = $comDate;
    }

    function setIsactive($isactive) {
        $this->isactive = $isactive;
    }

    function setCommentid($commentid) {
        $this->commentid = $commentid;
    }

    function setUserid(\AppBundle\Entity\Users $userid) {
        $this->userid = $userid;
    }



}

