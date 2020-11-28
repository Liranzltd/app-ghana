<?php

namespace AppBundle\Entity;

/**
 * Tier
 */
class Tier
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string
     */
    private $subscriptionFee;

    /**
     * @var string
     */
    private $membershipCategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $benefits;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->benefits = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name.
     *
     * @param string $name
     *
     * @return Tier
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Tier
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set subscriptionFee.
     *
     * @param string $subscriptionFee
     *
     * @return Tier
     */
    public function setSubscriptionFee($subscriptionFee)
    {
        $this->subscriptionFee = $subscriptionFee;

        return $this;
    }

    /**
     * Get subscriptionFee.
     *
     * @return string
     */
    public function getSubscriptionFee()
    {
        return $this->subscriptionFee;
    }

    /**
     * Set membershipCategory.
     *
     * @param string $membershipCategory
     *
     * @return Tier
     */
    public function setMembershipCategory($membershipCategory)
    {
        $this->membershipCategory = $membershipCategory;

        return $this;
    }

    /**
     * Get membershipCategory.
     *
     * @return string
     */
    public function getMembershipCategory()
    {
        return $this->membershipCategory;
    }

    /**
     * Add benefit.
     *
     * @param \AppBundle\Entity\TierBenefit $benefit
     *
     * @return Tier
     */
    public function addBenefit(\AppBundle\Entity\TierBenefit $benefit)
    {
        $this->benefits[] = $benefit;
        $benefit->setTier($this);
        return $this;
    }

    /**
     * Remove benefit.
     *
     * @param \AppBundle\Entity\TierBenefit $benefit
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeBenefit(\AppBundle\Entity\TierBenefit $benefit)
    {
        return $this->benefits->removeElement($benefit);
    }

    /**
     * Get benefits.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    public function __toString()
    {
      return $this->getName() == null ? 'New' : $this->getName();
    }
}
