<?php

namespace AppBundle\Entity;

/**
 * CompanyTypeDocumentation
 */
class CompanyTypeDocumentation
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
     * @var \AppBundle\Entity\CompanyType
     */
    private $companyType;


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
     * @return CompanyTypeDocumentation
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
     * Set companyType
     *
     * @param \AppBundle\Entity\CompanyType $companyType
     *
     * @return CompanyTypeDocumentation
     */
    public function setCompanyType(\AppBundle\Entity\CompanyType $companyType = null)
    {
        $this->companyType = $companyType;

        return $this;
    }

    /**
     * Get companyType
     *
     * @return \AppBundle\Entity\CompanyType
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }
    /**
     * @var boolean
     */
    private $isRequired = true;


    /**
     * Set isRequired
     *
     * @param boolean $isRequired
     *
     * @return CompanyTypeDocumentation
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    /**
     * Get isRequired
     *
     * @return boolean
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }
    /**
     * @var boolean
     */
    private $multiple = true;


    /**
     * Set multiple
     *
     * @param boolean $multiple
     *
     * @return CompanyTypeDocumentation
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;

        return $this;
    }

    /**
     * Get multiple
     *
     * @return boolean
     */
    public function getMultiple()
    {
        return $this->multiple;
    }
    /**
     * @var boolean
     */
    private $expires = true;


    /**
     * Set expires
     *
     * @param boolean $expires
     *
     * @return CompanyTypeDocumentation
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires
     *
     * @return boolean
     */
    public function getExpires()
    {
        return $this->expires;
    }

    public function __toString()
    {
      return $this->getDocumentType() == null ? 'New' : $this->getDocumentType()->getName();
    }
    /**
     * @var \AppBundle\Entity\DocumentType
     */
    private $documentType;


    /**
     * Set documentType
     *
     * @param \AppBundle\Entity\DocumentType $documentType
     *
     * @return CompanyTypeDocumentation
     */
    public function setDocumentType(\AppBundle\Entity\DocumentType $documentType = null)
    {
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * Get documentType
     *
     * @return \AppBundle\Entity\DocumentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }
    /**
     * @var boolean
     */
    private $systemGenerated = false;


    /**
     * Set systemGenerated
     *
     * @param boolean $systemGenerated
     *
     * @return CompanyTypeDocumentation
     */
    public function setSystemGenerated($systemGenerated)
    {
        $this->systemGenerated = $systemGenerated;

        return $this;
    }

    /**
     * Get systemGenerated
     *
     * @return boolean
     */
    public function getSystemGenerated()
    {
        return $this->systemGenerated;
    }
    /**
     * @var boolean
     */
    private $hasUpload = true;


    /**
     * Set hasUpload
     *
     * @param boolean $hasUpload
     *
     * @return CompanyTypeDocumentation
     */
    public function setHasUpload($hasUpload)
    {
        $this->hasUpload = $hasUpload;

        return $this;
    }

    /**
     * Get hasUpload
     *
     * @return boolean
     */
    public function getHasUpload()
    {
        return $this->hasUpload;
    }
    /**
     * @var boolean
     */
    private $requiresUpload = true;


    /**
     * Set requiresUpload
     *
     * @param boolean $requiresUpload
     *
     * @return CompanyTypeDocumentation
     */
    public function setRequiresUpload($requiresUpload)
    {
        $this->requiresUpload = $requiresUpload;

        return $this;
    }

    /**
     * Get requiresUpload
     *
     * @return boolean
     */
    public function getRequiresUpload()
    {
        return $this->requiresUpload;
    }
}
