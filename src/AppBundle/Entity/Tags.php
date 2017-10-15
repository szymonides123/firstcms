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
     * @ORM\Column(name="tagname", type="string", length=45, nullable=true)
     */
    private $tagname;

    /**
     * @var integer
     *
     * @ORM\Column(name="tagid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Posts", mappedBy="tagsTagid")
     */
    private $postsPostid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->postsPostid = new \Doctrine\Common\Collections\ArrayCollection();
    }
    function getTagname() {
        return $this->tagname;
    }

    function getTagid() {
        return $this->tagid;
    }

    function getPostsPostid(): \Doctrine\Common\Collections\Collection {
        return $this->postsPostid;
    }

    function setTagname($tagname) {
        $this->tagname = $tagname;
    }

    function setTagid($tagid) {
        $this->tagid = $tagid;
    }

    function setPostsPostid(\Doctrine\Common\Collections\Collection $postsPostid) {
        $this->postsPostid = $postsPostid;
    }


}

