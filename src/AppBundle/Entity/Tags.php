<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity
 */
class Tags
{
    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255, nullable=true)
     */
    private $tag;

    /**
     * @var integer
     *
     * @ORM\Column(name="tag_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Posts", inversedBy="tagsTag")
     * @ORM\JoinTable(name="tags_has_posts",
     *   joinColumns={
     *     @ORM\JoinColumn(name="tags_tag_id", referencedColumnName="tag_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="posts_idposts", referencedColumnName="idposts"),
     *     @ORM\JoinColumn(name="posts_users_user_id", referencedColumnName="users_user_id")
     *   }
     * )
     */
    private $postsposts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->postsposts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    function getTag() {
        return $this->tag;
    }

    function getTagId() {
        return $this->tagId;
    }

    function getPostsposts(): \Doctrine\Common\Collections\Collection {
        return $this->postsposts;
    }

    function setTag($tag) {
        $this->tag = $tag;
    }

    function setTagId($tagId) {
        $this->tagId = $tagId;
    }

    function setPostsposts(\Doctrine\Common\Collections\Collection $postsposts) {
        $this->postsposts = $postsposts;
    }



}

