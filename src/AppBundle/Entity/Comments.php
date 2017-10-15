<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="fk_comments_users1_idx", columns={"users_user_id"})})
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="com_active", type="integer", nullable=true)
     */
    private $comActive;

    /**
     * @var string
     *
     * @ORM\Column(name="com_content", type="text", length=65535, nullable=true)
     */
    private $comContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="com_date", type="date", nullable=true)
     */
    private $comDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="users_user_id", referencedColumnName="user_id")
     * })
     */
    private $usersUser;

    function getUserId() {
        return $this->userId;
    }

    function getComActive() {
        return $this->comActive;
    }

    function getComContent() {
        return $this->comContent;
    }

    function getComDate(): \DateTime {
        return $this->comDate;
    }

    function getCommentId() {
        return $this->commentId;
    }

    function getUsersUser(): \AppBundle\Entity\Users {
        return $this->usersUser;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setComActive($comActive) {
        $this->comActive = $comActive;
    }

    function setComContent($comContent) {
        $this->comContent = $comContent;
    }

    function setComDate(\DateTime $comDate) {
        $this->comDate = $comDate;
    }

    function setCommentId($commentId) {
        $this->commentId = $commentId;
    }

    function setUsersUser(\AppBundle\Entity\Users $usersUser) {
        $this->usersUser = $usersUser;
    }


}

