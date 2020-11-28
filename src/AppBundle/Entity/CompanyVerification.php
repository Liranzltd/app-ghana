<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyVerification
 */
class CompanyVerification
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $status = false;

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \AppBundle\Entity\Company
     */
    private $company;

    /**
     * @var \AppBundle\Entity\VerificationStep
     */
    private $verificationStep;


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
     * Set status
     *
     * @param boolean $status
     *
     * @return CompanyVerification
     */
    public function setStatus($status)
    {
        
	$this->status = $status;
	
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return CompanyVerification
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CompanyVerification
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
     * @return CompanyVerification
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
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return CompanyVerification
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
     * Set verificationStep
     *
     * @param \AppBundle\Entity\VerificationStep $verificationStep
     *
     * @return CompanyVerification
     */
    public function setVerificationStep(\AppBundle\Entity\VerificationStep $verificationStep = null)
    {
        $this->verificationStep = $verificationStep;

        return $this;
    }

    /**
     * Get verificationStep
     *
     * @return \AppBundle\Entity\VerificationStep
     */
    public function getVerificationStep()
    {
        return $this->verificationStep;
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
     * @var \DateTime
     */
    private $verificationDate;

    /**
     * @var \AppBundle\Entity\Staff
     */
    private $verifiedBy;


    /**
     * Set verificationDate
     *
     * @param \DateTime $verificationDate
     *
     * @return CompanyVerification
     */
    public function setVerificationDate($verificationDate)
    {
        $this->verificationDate = $verificationDate;
        if($verificationDate != null)
        {
  	    $this->status = 'Done';
	}
        return $this;
    }

    /**
     * Get verificationDate
     *
     * @return \DateTime
     */
    public function getVerificationDate()
    {
        return $this->verificationDate;
    }

    /**
     * Set verifiedBy
     *
     * @param \AppBundle\Entity\Staff $verifiedBy
     *
     * @return CompanyVerification
     */
    public function setVerifiedBy(\AppBundle\Entity\Staff $verifiedBy = null)
    {
        $this->verifiedBy = $verifiedBy;

        return $this;
    }

    /**
     * Get verifiedBy
     *
     * @return \AppBundle\Entity\Staff
     */
    public function getVerifiedBy()
    {
        return $this->verifiedBy;
    }
    /**
     * @var string
     */
    private $approvalStatus;


    /**
     * Set approvalStatus
     *
     * @param string $approvalStatus
     *
     * @return CompanyVerification
     */
    public function setApprovalStatus($approvalStatus)
    {
        $this->approvalStatus = $approvalStatus;

        return $this;
    }

    /**
     * Get approvalStatus
     *
     * @return string
     */
    public function getApprovalStatus()
    {
        return $this->approvalStatus;
    }
}
