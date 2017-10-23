<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="sentences")
 * @ORM\Entity
 */
class Sentences
{
    /**
     * @var string
     *
     * @ORM\Column(name="sentencecontent", type="string", length=255, nullable=true)
     */
    private $sentencecontent;

    /**
     * @var integer
     *
     * @ORM\Column(name="sentenceid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sentenceid;

//    function getSentencecontent() {
//        return $this->sentencecontent;
//    }
//
//    function getSentenceid() {
//        return $this->sentenceid;
//    }
//    function setSentencecontent($sentencecontent) {
//        $this->sentencecontent = $sentencecontent;
//    }
//
//    function setSentenceid($sentenceid) {
//        $this->sentenceid = $sentenceid;
//    }



}

