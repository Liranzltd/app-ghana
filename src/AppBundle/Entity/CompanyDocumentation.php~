<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyDocumentation
 */
class CompanyDocumentation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $file;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \AppBundle\Entity\CompanyTypeDocumentation
     */
    private $documentType;

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
     * Set file
     *
     * @param string $file
     *
     * @return CompanyDocumentation
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CompanyDocumentation
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
     * @return CompanyDocumentation
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
     * Set documentType
     *
     * @param \AppBundle\Entity\CompanyTypeDocumentation $documentType
     *
     * @return CompanyDocumentation
     */
    public function setDocumentType(\AppBundle\Entity\CompanyTypeDocumentation $documentType = null)
    {
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * Get documentType
     *
     * @return \AppBundle\Entity\CompanyTypeDocumentation
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return CompanyDocumentation
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
    private $documentNumber;

    /**
     * @var string
     */
    private $issuedBy;

    /**
     * @var \DateTime
     */
    private $issueDate;

    /**
     * @var \DateTime
     */
    private $expiryDate;


    /**
     * Set documentNumber
     *
     * @param string $documentNumber
     *
     * @return CompanyDocumentation
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }

    /**
     * Get documentNumber
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * Set issuedBy
     *
     * @param string $issuedBy
     *
     * @return CompanyDocumentation
     */
    public function setIssuedBy($issuedBy)
    {
        $this->issuedBy = $issuedBy;

        return $this;
    }

    /**
     * Get issuedBy
     *
     * @return string
     */
    public function getIssuedBy()
    {
        return $this->issuedBy;
    }

    /**
     * Set issueDate
     *
     * @param \DateTime $issueDate
     *
     * @return CompanyDocumentation
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * Get issueDate
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     *
     * @return CompanyDocumentation
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
    private $verificationStatus;


    /**
     * Set verificationStatus
     *
     * @param string $verificationStatus
     *
     * @return CompanyDocumentation
     */
    public function setVerificationStatus($verificationStatus)
    {
        $this->verificationStatus = $verificationStatus;

        return $this;
    }

    /**
     * Get verificationStatus
     *
     * @return string
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }
}
