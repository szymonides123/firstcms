<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_role", type="integer", nullable=false)
     */
    private $userRole;

    /**
     * @var integer
     *
     * @ORM\Column(name="IsActive", type="integer", nullable=false)
     */
    private $isactive;

    /**
     * @var string
     *
     * @ORM\Column(name="user_login", type="string", length=45, nullable=false)
     */
    private $userLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=45, nullable=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_image", type="string", length=45, nullable=true)
     */
    private $userImage;

    /**
     * @var string
     *
     * @ORM\Column(name="user_desc", type="string", length=255, nullable=true)
     */
    private $userDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    function getUserRole() {
        return $this->userRole;
    }

    function getIsactive() {
        return $this->isactive;
    }

    function getUserLogin() {
        return $this->userLogin;
    }

    function getUserPassword() {
        return $this->userPassword;
    }

    function getUserImage() {
        return $this->userImage;
    }

    function getUserDesc() {
        return $this->userDesc;
    }

    function getUserId() {
        return $this->userId;
    }

    function setUserRole($userRole) {
        $this->userRole = $userRole;
    }

    function setIsactive($isactive) {
        $this->isactive = $isactive;
    }

    function setUserLogin($userLogin) {
        $this->userLogin = $userLogin;
    }

    function setUserPassword($userPassword) {
        $this->userPassword = $userPassword;
    }

    function setUserImage($userImage) {
        $this->userImage = $userImage;
    }

    function setUserDesc($userDesc) {
        $this->userDesc = $userDesc;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }


}

