<?php

namespace AppBundle\Entity;

/**
 * CompanySubscription
 */
class CompanySubscription
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $subscriptionDate;

    /**
     * @var \DateTime
     */
    private $expiryDate;

    /**
     * @var \AppBundle\Entity\Company
     */
    private $company;


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
     * Set subscriptionDate
     *
     * @param \DateTime $subscriptionDate
     *
     * @return CompanySubscription
     */
    public function setSubscriptionDate($subscriptionDate)
    {
        $this->subscriptionDate = $subscriptionDate;

        return $this;
    }

    /**
     * Get subscriptionDate
     *
     * @return \DateTime
     */
    public function getSubscriptionDate()
    {
        return $this->subscriptionDate;
    }

    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     *
     * @return CompanySubscription
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return CompanySubscription
     */
    public function setCompany(\AppBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Company
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * @var boolean
     */
    private $isActive;


    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return CompanySubscription
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * @var string
     */
    private $receipt;


    /**
     * Set receipt.
     *
     * @param string $receipt
     *
     * @return CompanySubscription
     */
    public function setReceipt($receipt)
    {
        $this->receipt = $receipt;

        return $this;
    }

    /**
     * Get receipt.
     *
     * @return string
     */
    public function getReceipt()
    {
        return $this->receipt;
    }
    /**
     * @var int|null
     */
    private $expiryReminder = 0;


    /**
     * Set expiryReminder.
     *
     * @param int|null $expiryReminder
     *
     * @return CompanySubscription
     */
    public function setExpiryReminder($expiryReminder = null)
    {
        $this->expiryReminder = $expiryReminder;

        return $this;
    }

    /**
     * Get expiryReminder.
     *
     * @return int|null
     */
    public function getExpiryReminder()
    {
        return $this->expiryReminder;
    }
    /**
     * @var \AppBundle\Entity\Tier
     */
    private $tier;


    /**
     * Set tier.
     *
     * @param \AppBundle\Entity\Tier|null $tier
     *
     * @return CompanySubscription
     */
    public function setTier(\AppBundle\Entity\Tier $tier = null)
    {
        $this->tier = $tier;

        return $this;
    }

    /**
     * Get tier.
     *
     * @return \AppBundle\Entity\Tier|null
     */
    public function getTier()
    {
        return $this->tier;
    }
}
