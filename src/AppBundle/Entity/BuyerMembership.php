<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * BuyerMembership
 */
class BuyerMembership
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $isAdmin = false;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \AppBundle\Entity\Member
     */
    private $member;

    /**
     * @var \AppBundle\Entity\Buyer
     */
    private $buyer;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     *
     * @return BuyerMembership
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return BuyerMembership
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return BuyerMembership
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set member
     *
     * @param \AppBundle\Entity\Member $member
     *
     * @return BuyerMembership
     */
    public function setMember(\AppBundle\Entity\Member $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \AppBundle\Entity\Member
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set buyer
     *
     * @param \AppBundle\Entity\Buyer $buyer
     *
     * @return BuyerMembership
     */
    public function setBuyer(\AppBundle\Entity\Buyer $buyer = null)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Get buyer
     *
     * @return \AppBundle\Entity\Buyer
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
      if($this->createdAt == null)
      {
        $this->createdAt = new \DateTime();
      }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updatedAt = new \DateTime();
    }
    /**
     * @var bool|null
     */
    private $isDisabled = false;


    /**
     * Set isDisabled.
     *
     * @param bool|null $isDisabled
     *
     * @return BuyerMembership
     */
    public function setIsDisabled($isDisabled = null)
    {
        $this->isDisabled = $isDisabled;

        return $this;
    }

    /**
     * Get isDisabled.
     *
     * @return bool|null
     */
    public function getIsDisabled()
    {
        return $this->isDisabled;
    }
}
