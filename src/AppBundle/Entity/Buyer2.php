<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Utils;

/**
 * Buyer
 */
class Buyer
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
     * @var string
     */
    private $natureOfBusiness;

    /**
     * @var integer
     */
    private $numberOfBranches = 1;

    /**
     * @var string
     */
    private $contactPerson;

    /**
     * @var string
     */
    private $designation;

    /**
     * @var string
     */
    private $officePhone;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $officialEmailAddress;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $eProcurementSystem;

    /**
     * @var integer
     */
    private $noOfAppUsers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $teamMembers;

    /**
     * @var \AppBundle\Entity\Category
     */
    private $sector;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $counties;

    public $file;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->teamMembers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->counties = new \Doctrine\Common\Collections\ArrayCollection();
        $this->postedRequests = new ArrayCollection();
        $this->resources = new ArrayCollection();
        $this->pools = new ArrayCollection();
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
     * @return Buyer
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
     * Set natureOfBusiness
     *
     * @param string $natureOfBusiness
     *
     * @return Buyer
     */
    public function setNatureOfBusiness($natureOfBusiness)
    {
        $this->natureOfBusiness = $natureOfBusiness;

        return $this;
    }

    /**
     * Get natureOfBusiness
     *
     * @return string
     */
    public function getNatureOfBusiness()
    {
        return $this->natureOfBusiness;
    }

    /**
     * Set numberOfBranches
     *
     * @param integer $numberOfBranches
     *
     * @return Buyer
     */
    public function setNumberOfBranches($numberOfBranches)
    {
        $this->numberOfBranches = $numberOfBranches;

        return $this;
    }

    /**
     * Get numberOfBranches
     *
     * @return integer
     */
    public function getNumberOfBranches()
    {
        return $this->numberOfBranches;
    }

    /**
     * Set contactPerson
     *
     * @param string $contactPerson
     *
     * @return Buyer
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    /**
     * Get contactPerson
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Buyer
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set officePhone
     *
     * @param string $officePhone
     *
     * @return Buyer
     */
    public function setOfficePhone($officePhone)
    {
        $this->officePhone = $officePhone;

        return $this;
    }

    /**
     * Get officePhone
     *
     * @return string
     */
    public function getOfficePhone()
    {
        return $this->officePhone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Buyer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set officialEmailAddress
     *
     * @param string $officialEmailAddress
     *
     * @return Buyer
     */
    public function setOfficialEmailAddress($officialEmailAddress)
    {
        $this->officialEmailAddress = $officialEmailAddress;

        return $this;
    }

    /**
     * Get officialEmailAddress
     *
     * @return string
     */
    public function getOfficialEmailAddress()
    {
        return $this->officialEmailAddress;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Buyer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Buyer
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Buyer
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
     * Set eProcurementSystem
     *
     * @param string $eProcurementSystem
     *
     * @return Buyer
     */
    public function setEProcurementSystem($eProcurementSystem)
    {
        $this->eProcurementSystem = $eProcurementSystem;

        return $this;
    }

    /**
     * Get eProcurementSystem
     *
     * @return string
     */
    public function getEProcurementSystem()
    {
        return $this->eProcurementSystem;
    }

    /**
     * Set noOfAppUsers
     *
     * @param integer $noOfAppUsers
     *
     * @return Buyer
     */
    public function setNoOfAppUsers($noOfAppUsers)
    {
        $this->noOfAppUsers = $noOfAppUsers;

        return $this;
    }

    /**
     * Get noOfAppUsers
     *
     * @return integer
     */
    public function getNoOfAppUsers()
    {
        return $this->noOfAppUsers;
    }

    /**
     * Add teamMember
     *
     * @param \AppBundle\Entity\BuyerMembership $teamMember
     *
     * @return Buyer
     */
    public function addTeamMember(\AppBundle\Entity\BuyerMembership $teamMember)
    {
        $this->teamMembers[] = $teamMember;

        return $this;
    }

    /**
     * Remove teamMember
     *
     * @param \AppBundle\Entity\BuyerMembership $teamMember
     */
    public function removeTeamMember(\AppBundle\Entity\BuyerMembership $teamMember)
    {
        $this->teamMembers->removeElement($teamMember);
    }

    /**
     * Get teamMembers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeamMembers()
    {
        return $this->teamMembers;
    }

    /**
     * Set sector
     *
     * @param \AppBundle\Entity\Category $sector
     *
     * @return Buyer
     */
    public function setSector(\AppBundle\Entity\Category $sector = null)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return \AppBundle\Entity\Category
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Add county
     *
     * @param \AppBundle\Entity\County $county
     *
     * @return Buyer
     */
    public function addCounty(\AppBundle\Entity\County $county)
    {
        $this->counties[] = $county;

        return $this;
    }

    /**
     * Remove county
     *
     * @param \AppBundle\Entity\County $county
     */
    public function removeCounty(\AppBundle\Entity\County $county)
    {
        $this->counties->removeElement($county);
    }

    /**
     * Get counties
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCounties()
    {
        return $this->counties;
    }
    /**
     * @var string
     */
    private $logo;


    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Buyer
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
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
     * @return Buyer
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
     * @return Buyer
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
   * Sets file.
   *
   * @param UploadedFile $file
   */
    public function setFile(UploadedFile $file = null)
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

    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues
        $filename = uniqid().'.'.$this->getFile()->guessExtension();

        // move takes the target directory and target filename as params
        $this->getFile()->move($_SERVER['DOCUMENT_ROOT'].'/web/uploads/documents/'.$this->getName(),$filename);

        // set the path property to the filename where you've saved the file
        $this->logo = $filename;

        // clean up the file property as you won't need it anymore
        $this->setFile(null);
    }

    /**
     * Lifecycle callback to upload the file to the server
     */
    public function lifecycleFileUpload()
    {
      $this->upload();
      $this->setSlug(Utils::slugify($this->getName()));
    }

    /**
     * Updates the hash value to force the preUpdate and postUpdate events to fire
     */
    public function refreshUpdated()
    {
        $this->setUpdatedAt(new \DateTime());
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

    public function __toString()
    {
      return $this->getName() == null ? 'New' : $this->getName();
    }

    /**
     * @var \AppBundle\Entity\CompanyType
     */
    private $companyType;


    /**
     * Set companyType
     *
     * @param \AppBundle\Entity\CompanyType $companyType
     *
     * @return Buyer
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
     * @var string
     */
    private $status;


    /**
     * Set status
     *
     * @param string $status
     *
     * @return Buyer
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
     * @var \AppBundle\Entity\Member
     */
    private $registeredBy;


    /**
     * Set registeredBy
     *
     * @param \AppBundle\Entity\Member $registeredBy
     *
     * @return Buyer
     */
    public function setRegisteredBy(\AppBundle\Entity\Member $registeredBy = null)
    {
        $this->registeredBy = $registeredBy;

        return $this;
    }

    /**
     * Get registeredBy
     *
     * @return \AppBundle\Entity\Member
     */
    public function getRegisteredBy()
    {
        return $this->registeredBy;
    }
    /**
     * @var string
     */
    private $buyerType;


    /**
     * Set buyerType
     *
     * @param string $buyerType
     *
     * @return Buyer
     */
    public function setBuyerType($buyerType)
    {
        $this->buyerType = $buyerType;

        return $this;
    }

    /**
     * Get buyerType
     *
     * @return string
     */
    public function getBuyerType()
    {
        return $this->buyerType;
    }
    /**
     * @var string
     */
    private $slug;


    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Buyer
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @var boolean
     */
    private $hasEProcurementSystem = false;


    /**
     * Set hasEProcurementSystem
     *
     * @param boolean $hasEProcurementSystem
     *
     * @return Buyer
     */
    public function setHasEProcurementSystem($hasEProcurementSystem)
    {
        $this->hasEProcurementSystem = $hasEProcurementSystem;

        return $this;
    }

    /**
     * Get hasEProcurementSystem
     *
     * @return boolean
     */
    public function getHasEProcurementSystem()
    {
        return $this->hasEProcurementSystem;
    }
    /**
     * @var string
     */
    private $description;


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Buyer
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @var string
     */
    private $website;


    /**
     * Set website
     *
     * @param string $website
     *
     * @return Buyer
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }
    /**
     * @var string|null
     */
    private $gender;


    /**
     * Set gender.
     *
     * @param string|null $gender
     *
     * @return Buyer
     */
    public function setGender($gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $postedRequests;


    /**
     * Add postedRequest.
     *
     * @param \AppBundle\Entity\Request $postedRequest
     *
     * @return Buyer
     */
    public function addPostedRequest(\AppBundle\Entity\Request $postedRequest)
    {
        $this->postedRequests[] = $postedRequest;

        return $this;
    }

    /**
     * Remove postedRequest.
     *
     * @param \AppBundle\Entity\Request $postedRequest
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePostedRequest(\AppBundle\Entity\Request $postedRequest)
    {
        return $this->postedRequests->removeElement($postedRequest);
    }

    /**
     * Get postedRequests.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPostedRequests()
    {
        return $this->postedRequests;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $resources;


    /**
     * Add resource.
     *
     * @param \AppBundle\Entity\BusinessGrowthHub $resource
     *
     * @return Buyer
     */
    public function addResource(\AppBundle\Entity\BusinessGrowthHub $resource)
    {
        $this->resources[] = $resource;

        return $this;
    }

    /**
     * Remove resource.
     *
     * @param \AppBundle\Entity\BusinessGrowthHub $resource
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeResource(\AppBundle\Entity\BusinessGrowthHub $resource)
    {
        return $this->resources->removeElement($resource);
    }

    /**
     * Get resources.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResources()
    {
        return $this->resources;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pools;


    /**
     * Add pool.
     *
     * @param \AppBundle\Entity\BuyerSupplierPool $pool
     *
     * @return Buyer
     */
    public function addPool(\AppBundle\Entity\BuyerSupplierPool $pool)
    {
        $this->pools[] = $pool;

        return $this;
    }

    /**
     * Remove pool.
     *
     * @param \AppBundle\Entity\BuyerSupplierPool $pool
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePool(\AppBundle\Entity\BuyerSupplierPool $pool)
    {
        return $this->pools->removeElement($pool);
    }

    /**
     * Get pools.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPools()
    {
        return $this->pools;
    }
    /**
     * @var bool
     */
    private $showOnWebsite = false;


    /**
     * Set showOnWebsite.
     *
     * @param bool $showOnWebsite
     *
     * @return Buyer
     */
    public function setShowOnWebsite($showOnWebsite)
    {
        $this->showOnWebsite = $showOnWebsite;

        return $this;
    }

    /**
     * Get showOnWebsite.
     *
     * @return bool
     */
    public function getShowOnWebsite()
    {
        return $this->showOnWebsite;
    }


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sectors;


    /**
     * Add sector.
     *
     * @param \AppBundle\Entity\Category $sector
     *
     * @return Buyer
     */
    public function addSector(\AppBundle\Entity\Category $sector)
    {
        $this->sectors[] = $sector;

        return $this;
    }

    /**
     * Remove sector.
     *
     * @param \AppBundle\Entity\Category $sector
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSector(\AppBundle\Entity\Category $sector)
    {
        return $this->sectors->removeElement($sector);
    }

    /**
     * Get sectors.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSectors()
    {
        return $this->sectors;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $regions;


    /**
     * Add region.
     *
     * @param \AppBundle\Entity\Province $region
     *
     * @return Buyer
     */
    public function addRegion(\AppBundle\Entity\Province $region)
    {
        $this->regions[] = $region;

        return $this;
    }

    /**
     * Remove region.
     *
     * @param \AppBundle\Entity\Province $region
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRegion(\AppBundle\Entity\Province $region)
    {
        return $this->regions->removeElement($region);
    }

    /**
     * Get regions.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegions()
    {
        return $this->regions;
    }
}
