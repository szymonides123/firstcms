<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string", length=255, nullable=true)
     */
    private $categoryName;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryId;

    function getCategoryName() {
        return $this->categoryName;
    }

    function getCategoryId() {
        return $this->categoryId;
    }

    function setCategoryName($categoryName) {
        $this->categoryName = $categoryName;
    }

    function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
    }


}

