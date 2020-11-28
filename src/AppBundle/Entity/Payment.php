<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 */
class Payment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $mode;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var \DateTime
     */
    private $transactionTime;

    /**
     * @var string
     */
    private $gatewayTransactionCode;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $requiredDocuments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $companies;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->requiredDocuments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->companies = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set mode
     *
     * @param string $mode
     *
     * @return Payment
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set transactionTime
     *
     * @param \DateTime $transactionTime
     *
     * @return Payment
     */
    public function setTransactionTime($transactionTime)
    {
        $this->transactionTime = $transactionTime;

        return $this;
    }

    /**
     * Get transactionTime
     *
     * @return \DateTime
     */
    public function getTransactionTime()
    {
        return $this->transactionTime;
    }

    /**
     * Set gatewayTransactionCode
     *
     * @param string $gatewayTransactionCode
     *
     * @return Payment
     */
    public function setGatewayTransactionCode($gatewayTransactionCode)
    {
        $this->gatewayTransactionCode = $gatewayTransactionCode;

        return $this;
    }

    /**
     * Get gatewayTransactionCode
     *
     * @return string
     */
    public function getGatewayTransactionCode()
    {
        return $this->gatewayTransactionCode;
    }

    /**
     * Set transactionId
     *
     * @param string $transactionId
     *
     * @return Payment
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Add requiredDocument
     *
     * @param \AppBundle\Entity\CompanyTypeDocumentation $requiredDocument
     *
     * @return Payment
     */
    public function addRequiredDocument(\AppBundle\Entity\CompanyTypeDocumentation $requiredDocument)
    {
        $this->requiredDocuments[] = $requiredDocument;

        return $this;
    }

    /**
     * Remove requiredDocument
     *
     * @param \AppBundle\Entity\CompanyTypeDocumentation $requiredDocument
     */
    public function removeRequiredDocument(\AppBundle\Entity\CompanyTypeDocumentation $requiredDocument)
    {
        $this->requiredDocuments->removeElement($requiredDocument);
    }

    /**
     * Get requiredDocuments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRequiredDocuments()
    {
        return $this->requiredDocuments;
    }

    /**
     * Add company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return Payment
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
    /**
     * @var \AppBundle\Entity\Company
     */
    private $company;


    /**
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return Payment
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
     * @var string
     */
    private $remarks;


    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return Payment
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Payment
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
     * @return Payment
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
     * @var string
     */
    private $status;


    /**
     * Set status
     *
     * @param string $status
     *
     * @return Payment
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @var string
     */
    private $paymentReference;


    /**
     * Set paymentReference
     *
     * @param string $paymentReference
     *
     * @return Payment
     */
    public function setPaymentReference($paymentReference)
    {
        $this->paymentReference = $paymentReference;

        return $this;
    }

    /**
     * Get paymentReference
     *
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->paymentReference;
    }
    /**
     * @var \AppBundle\Entity\PromoCode
     */
    private $promoCode;


    /**
     * Set promoCode
     *
     * @param \AppBundle\Entity\PromoCode $promoCode
     *
     * @return Payment
     */
    public function setPromoCode(\AppBundle\Entity\PromoCode $promoCode = null)
    {
        $this->promoCode = $promoCode;

        return $this;
    }

    /**
     * Get promoCode
     *
     * @return \AppBundle\Entity\PromoCode
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }
    /**
     * @var \AppBundle\Entity\Staff
     */
    private $recordedBy;


    /**
     * Set recordedBy
     *
     * @param \AppBundle\Entity\Staff $recordedBy
     *
     * @return Payment
     */
    public function setRecordedBy(\AppBundle\Entity\Staff $recordedBy = null)
    {
        $this->recordedBy = $recordedBy;

        return $this;
    }

    /**
     * Get recordedBy
     *
     * @return \AppBundle\Entity\Staff
     */
    public function getRecordedBy()
    {
        return $this->recordedBy;
    }

    public function __toString()
    {
      return $this->getPaymentReference() != null ? $this->getPaymentReference() : 'New';
    }
}
