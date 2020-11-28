<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * PromoCode
 */
class PromoCode
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $amountOff;

    /**
     * @var boolean
     */
    private $isPercentage = false;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $payments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->payments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->companies = new ArrayCollection();
    }

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
     * Set code
     *
     * @param string $code
     *
     * @return PromoCode
     */
    public function setCode($code)
    {
        $this->code = strtoupper($code);

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set amountOff
     *
     * @param string $amountOff
     *
     * @return PromoCode
     */
    public function setAmountOff($amountOff)
    {
        $this->amountOff = $amountOff;

        return $this;
    }

    /**
     * Get amountOff
     *
     * @return string
     */
    public function getAmountOff()
    {
        return $this->amountOff;
    }

    /**
     * Set isPercentage
     *
     * @param boolean $isPercentage
     *
     * @return PromoCode
     */
    public function setIsPercentage($isPercentage)
    {
        $this->isPercentage = $isPercentage;

        return $this;
    }

    /**
     * Get isPercentage
     *
     * @return boolean
     */
    public function getIsPercentage()
    {
        return $this->isPercentage;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return PromoCode
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
     * @return PromoCode
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
     * Add payment
     *
     * @param \AppBundle\Entity\Payment $payment
     *
     * @return PromoCode
     */
    public function addPayment(\AppBundle\Entity\Payment $payment)
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * Remove payment
     *
     * @param \AppBundle\Entity\Payment $payment
     */
    public function removePayment(\AppBundle\Entity\Payment $payment)
    {
        $this->payments->removeElement($payment);
    }

    /**
     * Get payments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayments()
    {
        return $this->payments;
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

   public function __toString()
   {
     return $this->getCode() == null ? 'New' : $this->getIsPercentage() == null ? $this->getCode() . '('.$this->getAmountOff().' off)' :  $this->getCode() . '('.$this->getAmountOff().'% off)';
   }
    /**
     * @var \DateTime
     */
    private $expiryDate;


    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     *
     * @return PromoCode
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $companies;


    /**
     * Add company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return PromoCode
     */
    public function addCompany(\AppBundle\Entity\Company $company)
    {
        $this->companies[] = $company;

        return $this;
    }

    /**
     * Remove company
     *
     * @param \AppBundle\Entity\Company $company
     */
    public function removeCompany(\AppBundle\Entity\Company $company)
    {
        $this->companies->removeElement($company);
    }

    /**
     * Get companies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompanies()
    {
        return $this->companies;
    }
}
