<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="fk_users_roles_idx", columns={"roleid"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="userlogin", type="string", length=45, nullable=true)
     */
    private $userlogin;

    /**
     * @var string
     *
     * @ORM\Column(name="userpaaword", type="string", length=45, nullable=true)
     */
    private $userpaaword;

    /**
     * @var integer
     *
     * @ORM\Column(name="isactive", type="integer", nullable=true)
     */
    private $isactive;

    /**
     * @var string
     *
     * @ORM\Column(name="userimage", type="string", length=45, nullable=true)
     */
    private $userimage;

    /**
     * @var string
     *
     * @ORM\Column(name="userdesc", type="string", length=255, nullable=true)
     */
    private $userdesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

    /**
     * @var \AppBundle\Entity\Roles
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="roleid", referencedColumnName="roleid")
     * })
     */
    private $roleid;

    function getUserlogin() {
        return $this->userlogin;
    }

    function getUserpaaword() {
        return $this->userpaaword;
    }

    function getIsactive() {
        return $this->isactive;
    }

    function getUserimage() {
        return $this->userimage;
    }

    function getUserdesc() {
        return $this->userdesc;
    }

    function getUserid() {
        return $this->userid;
    }

    function getRoleid(): \AppBundle\Entity\Roles {
        return $this->roleid;
    }

    function setUserlogin($userlogin) {
        $this->userlogin = $userlogin;
    }

    function setUserpaaword($userpaaword) {
        $this->userpaaword = $userpaaword;
    }

    function setIsactive($isactive) {
        $this->isactive = $isactive;
    }

    function setUserimage($userimage) {
        $this->userimage = $userimage;
    }

    function setUserdesc($userdesc) {
        $this->userdesc = $userdesc;
    }

    function setUserid($userid) {
        $this->userid = $userid;
    }

    function setRoleid(\AppBundle\Entity\Roles $roleid) {
        $this->roleid = $roleid;
    }


}

