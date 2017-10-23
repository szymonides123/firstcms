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
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $postid;

    /**
     * @var \AppBundle\Entity\Categories
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoryid", referencedColumnName="categoryid")
     * })
     */
    private $categoryid;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id")
     * })
     */
    private $userid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Tags", inversedBy="postsPostid")
     * @ORM\JoinTable(name="posts_has_tags",
     *   joinColumns={
     *     @ORM\JoinColumn(name="posts_postid", referencedColumnName="postid"),
     *     @ORM\JoinColumn(name="posts_categoryid", referencedColumnName="categoryid"),
     *     @ORM\JoinColumn(name="posts_userid", referencedColumnName="userid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tags_tagid", referencedColumnName="tagid")
     *   }
     * )
     */
    private $tagsTagid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tagsTagid = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
//    function getPosttitle() {
//        return $this->posttitle;
//    }
//
//    function getPostcontent() {
//        return $this->postcontent;
//    }
//
//    function getPostdate(): \DateTime {
//        return $this->postdate;
//    }
//
//    function getPostimage() {
//        return $this->postimage;
//    }
//
//    function getIsactive() {
//        return $this->isactive;
//    }
//
//    function getPostid() {
//        return $this->postid;
//    }
//
//    function getCategoryid(): \AppBundle\Entity\Categories {
//        return $this->categoryid;
//    }
//
//    function getUserid(): \AppBundle\Entity\Users {
//        return $this->userid;
//    }
//
//    function getTagsTagid(): \Doctrine\Common\Collections\Collection {
//        return $this->tagsTagid;
//    }
//
//
//    function setPosttitle($posttitle) {
//        $this->posttitle = $posttitle;
//    }
//
//    function setPostcontent($postcontent) {
//        $this->postcontent = $postcontent;
//    }
//
//    function setPostdate(\DateTime $postdate) {
//        $this->postdate = $postdate;
//    }
//
//    function setPostimage($postimage) {
//        $this->postimage = $postimage;
//    }
//
//    function setIsactive($isactive) {
//        $this->isactive = $isactive;
//    }
//
//    function setPostid($postid) {
//        $this->postid = $postid;
//    }
//
//    function setCategoryid(\AppBundle\Entity\Categories $categoryid) {
//        $this->categoryid = $categoryid;
//    }
//
//    function setUserid(\AppBundle\Entity\Users $userid) {
//        $this->userid = $userid;
//    }
//
//    function setTagsTagid(\Doctrine\Common\Collections\Collection $tagsTagid) {
//        $this->tagsTagid = $tagsTagid;
//    }


}

