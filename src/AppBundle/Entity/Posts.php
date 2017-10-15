<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts", indexes={@ORM\Index(name="fk_posts_users_idx", columns={"users_user_id"}), @ORM\Index(name="fk_posts_categories1_idx", columns={"categories_category_id"})})
 * @ORM\Entity
 */
class Posts
{
    /**
     * @var string
     *
     * @ORM\Column(name="post_title", type="string", length=45, nullable=true)
     */
    private $postTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_author_id", type="integer", nullable=true)
     */
    private $postAuthorId;

    /**
     * @var string
     *
     * @ORM\Column(name="post_content", type="text", length=65535, nullable=true)
     */
    private $postContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date", type="date", nullable=true)
     */
    private $postDate;

    /**
     * @var string
     *
     * @ORM\Column(name="post_cat", type="string", length=45, nullable=true)
     */
    private $postCat;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_id", type="integer", nullable=true)
     */
    private $commentId;

    /**
     * @var string
     *
     * @ORM\Column(name="post_image", type="string", length=45, nullable=true)
     */
    private $postImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="idposts", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idposts;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="users_user_id", referencedColumnName="user_id")
     * })
     */
    private $usersUser;

    /**
     * @var \AppBundle\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categories_category_id", referencedColumnName="category_id")
     * })
     */
    private $categoriesCategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Tags", mappedBy="postsposts")
     */
    private $tagsTag;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tagsTag = new \Doctrine\Common\Collections\ArrayCollection();
    }
    function getPostTitle() {
        return $this->postTitle;
    }

    function getPostAuthorId() {
        return $this->postAuthorId;
    }

    function getPostContent() {
        return $this->postContent;
    }

    function getPostDate(): \DateTime {
        return $this->postDate;
    }

    function getPostCat() {
        return $this->postCat;
    }

    function getCommentId() {
        return $this->commentId;
    }

    function getPostImage() {
        return $this->postImage;
    }

    function getIdposts() {
        return $this->idposts;
    }

    function getUsersUser(): \AppBundle\Entity\Users {
        return $this->usersUser;
    }

    function getCategoriesCategory(): \AppBundle\Entity\Categories {
        return $this->categoriesCategory;
    }

    function getTagsTag(): \Doctrine\Common\Collections\Collection {
        return $this->tagsTag;
    }

    function setPostTitle($postTitle) {
        $this->postTitle = $postTitle;
    }

    function setPostAuthorId($postAuthorId) {
        $this->postAuthorId = $postAuthorId;
    }

    function setPostContent($postContent) {
        $this->postContent = $postContent;
    }

    function setPostDate(\DateTime $postDate) {
        $this->postDate = $postDate;
    }

    function setPostCat($postCat) {
        $this->postCat = $postCat;
    }

    function setCommentId($commentId) {
        $this->commentId = $commentId;
    }

    function setPostImage($postImage) {
        $this->postImage = $postImage;
    }

    function setIdposts($idposts) {
        $this->idposts = $idposts;
    }

    function setUsersUser(\AppBundle\Entity\Users $usersUser) {
        $this->usersUser = $usersUser;
    }

    function setCategoriesCategory(\AppBundle\Entity\Categories $categoriesCategory) {
        $this->categoriesCategory = $categoriesCategory;
    }

    function setTagsTag(\Doctrine\Common\Collections\Collection $tagsTag) {
        $this->tagsTag = $tagsTag;
    }


    

}

