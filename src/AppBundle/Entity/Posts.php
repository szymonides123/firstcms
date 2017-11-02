<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts", indexes={@ORM\Index(name="fk_posts_categories1_idx", columns={"categoryid"}), @ORM\Index(name="fk_posts_users1_idx", columns={"userid"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostsRepository")
 */
class Posts
{
    /**
     * @var string
     *
     * @ORM\Column(name="posttitle", type="string", length=45, nullable=true)
     */
    private $posttitle;

    /**
     * @var string
     *
     * @ORM\Column(name="postcontent", type="text", length=65535, nullable=true)
     */
    private $postcontent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postdate", type="date", nullable=true)
     */
    private $postdate;

    /**
     * @var string
     *
     * @ORM\Column(name="postimage", type="string", length=45, nullable=true)
     */
    private $postimage;

    /**
     * @var integer
     *
     * @ORM\Column(name="isactive", type="integer", nullable=true)
     */
    private $isactive;

    /**
     * @var integer
     *
     * @ORM\Column(name="postid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    
    private $postid;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryid", type="integer", nullable=true)
     */
    
    private $categoryid;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id")
     * })
     */
    private $userid;


    function getPosttitle() {
        return $this->posttitle;
    }

    function getPostcontent() {
        return $this->postcontent;
    }

    function getPostdate(): \DateTime {
        return $this->postdate;
    }

    function getPostimage() {
        return $this->postimage;
    }

    function getIsactive() {
        return $this->isactive;
    }

    function getPostid() {
        return $this->postid;
    }

    function getCategoryid(){
        return $this->categoryid;
    }

    function getUserid(){
        return $this->id;
    }


    function setPosttitle($posttitle) {
        $this->posttitle = $posttitle;
    }

    function setPostcontent($postcontent) {
        $this->postcontent = $postcontent;
    }

    function setPostdate(\DateTime $postdate) {
        $this->postdate = $postdate;
    }

    function setPostimage($postimage) {
        $this->postimage = $postimage;
    }

    function setIsactive($isactive) {
        $this->isactive = $isactive;
    }

    function setPostid($postid) {
        $this->postid = $postid;
    }

    function setCategoryid($categoryid) {
        $this->categoryid = $categoryid;
    }

    function setUserid($id) {
        $this->userid = $id;
    }




}

