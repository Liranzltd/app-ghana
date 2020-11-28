<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyRequest
 */
class CompanyRequest
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $invitationDate;

    /**
     * @var \DateTime|null
     */
    private $responseDate;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $buyerRemarks;

    /**
     * @var string
     */
    private $supplierRemarks;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $documents;

    /**
     * @var \AppBundle\Entity\Request
     */
    private $request;

    /**
     * @var \AppBundle\Entity\Company
     */
    private $company;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set invitationDate.
     *
     * @param \DateTime|null $invitationDate
     *
     * @return CompanyRequest
     */
    public function setInvitationDate($invitationDate = null)
    {
        $this->invitationDate = $invitationDate;

        return $this;
    }

    /**
     * Get invitationDate.
     *
     * @return \DateTime|null
     */
    public function getInvitationDate()
    {
        return $this->invitationDate;
    }

    /**
     * Set responseDate.
     *
     * @param \DateTime|null $responseDate
     *
     * @return CompanyRequest
     */
    public function setResponseDate($responseDate = null)
    {
        $this->responseDate = $responseDate;

        return $this;
    }

    /**
     * Get responseDate.
     *
     * @return \DateTime|null
     */
    public function getResponseDate()
    {
        return $this->responseDate;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return CompanyRequest
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set buyerRemarks.
     *
     * @param string $buyerRemarks
     *
     * @return CompanyRequest
     */
    public function setBuyerRemarks($buyerRemarks)
    {
        $this->buyerRemarks = $buyerRemarks;

        return $this;
    }

    /**
     * Get buyerRemarks.
     *
     * @return string
     */
    public function getBuyerRemarks()
    {
        return $this->buyerRemarks;
    }

    /**
     * Set supplierRemarks.
     *
     * @param string $supplierRemarks
     *
     * @return CompanyRequest
     */
    public function setSupplierRemarks($supplierRemarks)
    {
        $this->supplierRemarks = $supplierRemarks;

        return $this;
    }

    /**
     * Get supplierRemarks.
     *
     * @return string
     */
    public function getSupplierRemarks()
    {
        return $this->supplierRemarks;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return CompanyRequest
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
     * @return CompanyRequest
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
     * Add document.
     *
     * @param \AppBundle\Entity\CompanyRequestDocument $document
     *
     * @return CompanyRequest
     */
    public function addDocument(\AppBundle\Entity\CompanyRequestDocument $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document.
     *
     * @param \AppBundle\Entity\CompanyRequestDocument $document
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDocument(\AppBundle\Entity\CompanyRequestDocument $document)
    {
        return $this->documents->removeElement($document);
    }

    /**
     * Get documents.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Set request.
     *
     * @param \AppBundle\Entity\Request|null $request
     *
     * @return CompanyRequest
     */
    public function setRequest(\AppBundle\Entity\Request $request = null)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get request.
     *
     * @return \AppBundle\Entity\Request|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set company.
     *
     * @param \AppBundle\Entity\Company|null $company
     *
     * @return CompanyRequest
     */
    public function setCompany(\AppBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company.
     *
     * @return \AppBundle\Entity\Company|null
     */
    public function getCompany()
    {
        return $this->company;
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
     * @var string|null
     */
    private $score;


    /**
     * Set score.
     *
     * @param string|null $score
     *
     * @return CompanyRequest
     */
    public function setScore($score = null)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score.
     *
     * @return string|null
     */
    public function getScore()
    {
        return $this->score;
    }
}
