<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriesRepository")
 */
class Categories
{
    /**
     * @var string
     *
     * @ORM\Column(name="categoryname", type="string", length=45, nullable=true)
     */
    private $categoryname;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryid;

//    function getCategoryname() {
//        return $this->categoryname;
//    }
//
//    function getCategoryid() {
//        return $this->categoryid;
//    }
//    function setCategoryname($categoryname) {
//        $this->categoryname = $categoryname;
//    }
//
//    function setCategoryid($categoryid) {
//        $this->categoryid = $categoryid;
//    }



}

