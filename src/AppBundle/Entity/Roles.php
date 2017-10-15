<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var string
     *
     * @ORM\Column(name="rolename", type="string", length=45, nullable=true)
     */
    private $rolename;

    /**
     * @var integer
     *
     * @ORM\Column(name="roleid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleid;

    function getRolename() {
        return $this->rolename;
    }

    function getRoleid() {
        return $this->roleid;
    }

    function setRolename($rolename) {
        $this->rolename = $rolename;
    }

    function setRoleid($roleid) {
        $this->roleid = $roleid;
    }


}

