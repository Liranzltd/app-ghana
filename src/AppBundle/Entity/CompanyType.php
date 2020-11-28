<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * CompanyType
 */
class CompanyType
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

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
     * Set name
     *
     * @param string $name
     *
     * @return CompanyType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add requiredDocument
     *
     * @param \AppBundle\Entity\CompanyTypeDocumentation $requiredDocument
     *
     * @return CompanyType
     */
    public function addRequiredDocument(\AppBundle\Entity\CompanyTypeDocumentation $requiredDocument)
    {
        $this->requiredDocuments[] = $requiredDocument;
        $requiredDocument->setCompanyType($this);
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
     * @return CompanyType
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

    public function __toString()
    {
      return $this->getName() == null ? 'New' : $this->getName();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $verificationStages;


    /**
     * Add verificationStage
     *
     * @param \AppBundle\Entity\VerificationStage $verificationStage
     *
     * @return CompanyType
     */
    public function addVerificationStage(\AppBundle\Entity\VerificationStage $verificationStage)
    {
        $this->verificationStages[] = $verificationStage;
        $verificationStage->setCompanyType($this);
        return $this;
    }

    /**
     * Remove verificationStage
     *
     * @param \AppBundle\Entity\VerificationStage $verificationStage
     */
    public function removeVerificationStage(\AppBundle\Entity\VerificationStage $verificationStage)
    {
        $this->verificationStages->removeElement($verificationStage);
    }

    /**
     * Get verificationStages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVerificationStages()
    {
        return $this->verificationStages;
    }
}
