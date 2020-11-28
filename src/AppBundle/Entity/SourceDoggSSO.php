<?php

namespace AppBundle\Entity;

/**
 * SourceDoggSSO
 */
class SourceDoggSSO
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $dhot;

    /**
     * @var string|null
     */
    private $cookie;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var \AppBundle\Entity\Member
     */
    private $member;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dhot.
     *
     * @param string $dhot
     *
     * @return SourceDoggSSO
     */
    public function setDhot($dhot)
    {
        $this->dhot = $dhot;

        return $this;
    }

    /**
     * Get dhot.
     *
     * @return string
     */
    public function getDhot()
    {
        return $this->dhot;
    }

    /**
     * Set cookie.
     *
     * @param string|null $cookie
     *
     * @return SourceDoggSSO
     */
    public function setCookie($cookie = null)
    {
        $this->cookie = $cookie;

        return $this;
    }

    /**
     * Get cookie.
     *
     * @return string|null
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return SourceDoggSSO
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return SourceDoggSSO
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set member.
     *
     * @param \AppBundle\Entity\Member|null $member
     *
     * @return SourceDoggSSO
     */
    public function setMember(\AppBundle\Entity\Member $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member.
     *
     * @return \AppBundle\Entity\Member|null
     */
    public function getMember()
    {
        return $this->member;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    }
}
