<?php

namespace AppBundle\Entity;

/**
 * CompanyAddress
 */
class CompanyAddress
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $buildingNumber;

    /**
     * @var string
     */
    private $buildingName;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $postalAddress;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $plotNo;

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
     * @var \AppBundle\Entity\County
     */
    private $counties;


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
     * Set buildingNumber
     *
     * @param string $buildingNumber
     *
     * @return CompanyAddress
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;

        return $this;
    }

    /**
     * Get buildingNumber
     *
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Set buildingName
     *
     * @param string $buildingName
     *
     * @return CompanyAddress
     */
    public function setBuildingName($buildingName)
    {
        $this->buildingName = $buildingName;

        return $this;
    }

    /**
     * Get buildingName
     *
     * @return string
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return CompanyAddress
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return CompanyAddress
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return CompanyAddress
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set postalAddress
     *
     * @param string $postalAddress
     *
     * @return CompanyAddress
     */
    public function setPostalAddress($postalAddress)
    {
        $this->postalAddress = $postalAddress;

        return $this;
    }

    /**
     * Get postalAddress
     *
     * @return string
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return CompanyAddress
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set plotNo
     *
     * @param string $plotNo
     *
     * @return CompanyAddress
     */
    public function setPlotNo($plotNo)
    {
        $this->plotNo = $plotNo;

        return $this;
    }

    /**
     * Get plotNo
     *
     * @return string
     */
    public function getPlotNo()
    {
        return $this->plotNo;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CompanyAddress
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
     * @return CompanyAddress
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
     * @return CompanyAddress
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
     * Set counties
     *
     * @param \AppBundle\Entity\County $counties
     *
     * @return CompanyAddress
     */
    public function setCounties(\AppBundle\Entity\County $counties = null)
    {
        $this->counties = $counties;

        return $this;
    }

    /**
     * Get counties
     *
     * @return \AppBundle\Entity\County
     */
    public function getCounties()
    {
        return $this->counties;
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
     * @var \AppBundle\Entity\County
     */
    private $county;


    /**
     * Set county
     *
     * @param \AppBundle\Entity\County $county
     *
     * @return CompanyAddress
     */
    public function setCounty(\AppBundle\Entity\County $county = null)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return \AppBundle\Entity\County
     */
    public function getCounty()
    {
        return $this->county;
    }
    /**
     * @var \AppBundle\Entity\Province
     */
    private $region;


    /**
     * Set region
     *
     * @param \AppBundle\Entity\Province $region
     *
     * @return CompanyAddress
     */
    public function setRegion(\AppBundle\Entity\Province $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \AppBundle\Entity\Province
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * @var string|null
     */
    private $predominantLandmark;


    /**
     * Set predominantLandmark.
     *
     * @param string|null $predominantLandmark
     *
     * @return CompanyAddress
     */
    public function setPredominantLandmark($predominantLandmark = null)
    {
        $this->predominantLandmark = $predominantLandmark;

        return $this;
    }

    /**
     * Get predominantLandmark.
     *
     * @return string|null
     */
    public function getPredominantLandmark()
    {
        return $this->predominantLandmark;
    }
}
