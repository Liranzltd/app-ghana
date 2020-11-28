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
{    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $natureOfBusiness;

    /**
     * @var int|null
     */
    private $numberOfBranches = 1;

    /**
     * @var string|null
     */
    private $contactPerson;

    /**
     * @var string|null
     */
    private $designation;

    /**
     * @var string|null
     */
    private $officePhone;

    /**
     * @var string|null
     */
    private $mobile;

    /**
     * @var string|null
     */
    private $officialEmailAddress;

    /**
     * @var string|null
     */
    private $gender;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var bool|null
     */
    private $hasEProcurementSystem = false;

    /**
     * @var string|null
     */
    private $eProcurementSystem;

    /**
     * @var int|null
     */
    private $noOfAppUsers;

    /**
     * @var string|null
     */
    private $status = 'New';

    /**
     * @var string|null
     */
    private $buyerType;

    /**
     * @var string|null
     */
    private $logo;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var string|null
     */
    private $slug;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $website;

    /**
     * @var bool
     */
    private $showOnWebsite = false;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $teamMembers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $postedRequests;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $resources;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pools;

    /**
     * @var \AppBundle\Entity\Category
     */
    private $sector;

    /**
     * @var \AppBundle\Entity\CompanyType
     */
    private $companyType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $regions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sectors;

    public $file;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->teamMembers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->postedRequests = new \Doctrine\Common\Collections\ArrayCollection();
        $this->resources = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pools = new \Doctrine\Common\Collections\ArrayCollection();
        $this->regions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sectors = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name.
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
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set natureOfBusiness.
     *
     * @param string|null $natureOfBusiness
     *
     * @return Buyer
     */
    public function setNatureOfBusiness($natureOfBusiness = null)
    {
        $this->natureOfBusiness = $natureOfBusiness;

        return $this;
    }

    /**
     * Get natureOfBusiness.
     *
     * @return string|null
     */
    public function getNatureOfBusiness()
    {
        return $this->natureOfBusiness;
    }

    /**
     * Set numberOfBranches.
     *
     * @param int|null $numberOfBranches
     *
     * @return Buyer
     */
    public function setNumberOfBranches($numberOfBranches = null)
    {
        $this->numberOfBranches = $numberOfBranches;

        return $this;
    }

    /**
     * Get numberOfBranches.
     *
     * @return int|null
     */
    public function getNumberOfBranches()
    {
        return $this->numberOfBranches;
    }

    /**
     * Set contactPerson.
     *
     * @param string|null $contactPerson
     *
     * @return Buyer
     */
    public function setContactPerson($contactPerson = null)
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    /**
     * Get contactPerson.
     *
     * @return string|null
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Set designation.
     *
     * @param string|null $designation
     *
     * @return Buyer
     */
    public function setDesignation($designation = null)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation.
     *
     * @return string|null
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set officePhone.
     *
     * @param string|null $officePhone
     *
     * @return Buyer
     */
    public function setOfficePhone($officePhone = null)
    {
        $this->officePhone = $officePhone;

        return $this;
    }

    /**
     * Get officePhone.
     *
     * @return string|null
     */
    public function getOfficePhone()
    {
        return $this->officePhone;
    }

    /**
     * Set mobile.
     *
     * @param string|null $mobile
     *
     * @return Buyer
     */
    public function setMobile($mobile = null)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile.
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set officialEmailAddress.
     *
     * @param string|null $officialEmailAddress
     *
     * @return Buyer
     */
    public function setOfficialEmailAddress($officialEmailAddress = null)
    {
        $this->officialEmailAddress = $officialEmailAddress;

        return $this;
    }

    /**
     * Get officialEmailAddress.
     *
     * @return string|null
     */
    public function getOfficialEmailAddress()
    {
        return $this->officialEmailAddress;
    }

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
     * Set address.
     *
     * @param string|null $address
     *
     * @return Buyer
     */
    public function setAddress($address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city.
     *
     * @param string|null $city
     *
     * @return Buyer
     */
    public function setCity($city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country.
     *
     * @param string|null $country
     *
     * @return Buyer
     */
    public function setCountry($country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set hasEProcurementSystem.
     *
     * @param bool|null $hasEProcurementSystem
     *
     * @return Buyer
     */
    public function setHasEProcurementSystem($hasEProcurementSystem = null)
    {
        $this->hasEProcurementSystem = $hasEProcurementSystem;

        return $this;
    }

    /**
     * Get hasEProcurementSystem.
     *
     * @return bool|null
     */
    public function getHasEProcurementSystem()
    {
        return $this->hasEProcurementSystem;
    }

    /**
     * Set eProcurementSystem.
     *
     * @param string|null $eProcurementSystem
     *
     * @return Buyer
     */
    public function setEProcurementSystem($eProcurementSystem = null)
    {
        $this->eProcurementSystem = $eProcurementSystem;

        return $this;
    }

    /**
     * Get eProcurementSystem.
     *
     * @return string|null
     */
    public function getEProcurementSystem()
    {
        return $this->eProcurementSystem;
    }

    /**
     * Set noOfAppUsers.
     *
     * @param int|null $noOfAppUsers
     *
     * @return Buyer
     */
    public function setNoOfAppUsers($noOfAppUsers = null)
    {
        $this->noOfAppUsers = $noOfAppUsers;

        return $this;
    }

    /**
     * Get noOfAppUsers.
     *
     * @return int|null
     */
    public function getNoOfAppUsers()
    {
        return $this->noOfAppUsers;
    }

    /**
     * Set status.
     *
     * @param string|null $status
     *
     * @return Buyer
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set buyerType.
     *
     * @param string|null $buyerType
     *
     * @return Buyer
     */
    public function setBuyerType($buyerType = null)
    {
        $this->buyerType = $buyerType;

        return $this;
    }

    /**
     * Get buyerType.
     *
     * @return string|null
     */
    public function getBuyerType()
    {
        return $this->buyerType;
    }

    /**
     * Set logo.
     *
     * @param string|null $logo
     *
     * @return Buyer
     */
    public function setLogo($logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo.
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set createdAt.
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
     * @return Buyer
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
     * Set slug.
     *
     * @param string|null $slug
     *
     * @return Buyer
     */
    public function setSlug($slug = null)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug.
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Buyer
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set website.
     *
     * @param string|null $website
     *
     * @return Buyer
     */
    public function setWebsite($website = null)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website.
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->website;
    }

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
     * Add teamMember.
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
     * Remove teamMember.
     *
     * @param \AppBundle\Entity\BuyerMembership $teamMember
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTeamMember(\AppBundle\Entity\BuyerMembership $teamMember)
    {
        return $this->teamMembers->removeElement($teamMember);
    }

    /**
     * Get teamMembers.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeamMembers()
    {
        return $this->teamMembers;
    }

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
     * Set sector.
     *
     * @param \AppBundle\Entity\Category|null $sector
     *
     * @return Buyer
     */
    public function setSector(\AppBundle\Entity\Category $sector = null)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector.
     *
     * @return \AppBundle\Entity\Category|null
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set companyType.
     *
     * @param \AppBundle\Entity\CompanyType|null $companyType
     *
     * @return Buyer
     */
    public function setCompanyType(\AppBundle\Entity\CompanyType $companyType = null)
    {
        $this->companyType = $companyType;

        return $this;
    }

    /**
     * Get companyType.
     *
     * @return \AppBundle\Entity\CompanyType|null
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

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
        //$sector->setBuyer();
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
     * Updates the hash value to force the preUpdate and postUpdate events to fire
     */
    public function refreshUpdated()
    {
        $this->setUpdatedAt(new \DateTime());
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function lifecycleFileUpload()
    {
      $this->upload();
      $this->setSlug(Utils::slugify($this->getName()));
    }

    public function __toString()
    {
      return $this->getName() == null ? 'New' : $this->getName();
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
        $this->getFile()->move($_SERVER['DOCUMENT_ROOT'].'/uploads/documents/'.$this->getName(),$filename);

        // set the path property to the filename where you've saved the file
        $this->logo = $filename;

        // clean up the file property as you won't need it anymore
        $this->setFile(null);
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
   * Sets file.
   *
   * @param UploadedFile $file
   */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;

        return $this;
    }
}
