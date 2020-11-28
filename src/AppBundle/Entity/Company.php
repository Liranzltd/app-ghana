<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Utils;

/**
 * Company
 */
class Company
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
    private $registrationNumber;

    /**
     * @var string
     */
    private $graTinNumber;

    /**
     * @var \DateTime
     */
    private $registrationDate;

    /**
     * @var string
     */
    private $natureOfBusiness;

    /**
     * @var string
     */
    private $tradingName;

    /**
     * @var string
     */
    private $parentCompany;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $companyLogo;

    /**
     * @var string
     */
    private $memberType;

    /**
     * @var boolean
     */
    private $powerOfAttorney = false;

    /**
     * @var string
     */
    private $powerOfAttorneyFile;

    /**
     * @var integer
     */
    private $numberOfBranches = 1;

    /**
     * @var integer
     */
    private $numberOfEmployees = 0;

    /**
     * @var integer
     */
    private $shareOfGhanaianEmployees = 0;

    /**
     * @var integer
     */
    private $shareOfGhanaianManagementEmployees = 0;

    /**
     * @var integer
     */
    private $shareOfGhanaianDirectors = 0;

    /**
     * @var boolean
     */
    private $localContent = false;

    /**
     * @var string
     */
    private $localContentFile;

    /**
     * @var integer
     */
    private $ghanaianOwnershipPercentage = 0;

    /**
     * @var string
     */
    private $nominalCapital = 0.0;

    /**
     * @var string
     */
    private $issuedCapital = 0.0;

    /**
     * @var string
     */
    private $authorisedCapital = 0.0;

    /**
     * @var boolean
     */
    private $ownershipWomen = false;

    /**
     * @var boolean
     */
    private $ownershipUnder30 = false;

    /**
     * @var boolean
     */
    private $employDisabled = false;

    /**
     * @var string
     */
    private $bankName;

    /**
     * @var string
     */
    private $bankBranch;

    /**
     * @var boolean
     */
    private $bankruptcy = false;

    /**
     * @var boolean
     */
    private $creditChecks = false;

    /**
     * @var string
     */
    private $bankTel;

    /**
     * @var string
     */
    private $approxTurnover;

    /**
     * @var string
     */
    private $auditedStatements;

    /**
     * @var boolean
     */
    private $debarred = false;

    /**
     * @var boolean
     */
    private $criminalOffence = false;

    /**
     * @var boolean
     */
    private $conflictOfInterest = false;

    /**
     * @var boolean
     */
    private $conflictOfInterestIIA = false;

    /**
     * @var boolean
     */
    private $declareTrue = false;

    /**
     * @var boolean
     */
    private $understandRisks = false;

    /**
     * @var boolean
     */
    private $isOnSourceDogg = false;

    /**
     * @var string
     */
    private $amountDue = 0.0;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $subscriptionDate;

    /**
     * @var string
     */
    private $paymentReference;

    /**
     * @var string
     */
    private $status;

    /**
     * @var boolean
     */
    private $paymentReceived = false;

    /**
     * @var boolean
     */
    private $isFullyPaidUp = false;

    /**
     * @var boolean
     */
    private $isInvoiced = false;

    /**
     * @var boolean
     */
    private $isReceipted = false;

    /**
     * @var boolean
     */
    private $iiaValidated = false;

    /**
     * @var boolean
     */
    private $crbChecked = false;

    /**
     * @var integer
     */
    private $hiveBriteId;

    /**
     * @var integer
     */
    private $hiveBriteNetworkId;

    /**
     * @var boolean
     */
    private $section1Complete = false;

    /**
     * @var boolean
     */
    private $section2Complete = false;

    /**
     * @var boolean
     */
    private $section3Complete = false;

    /**
     * @var boolean
     */
    private $section4Complete = false;

    /**
     * @var boolean
     */
    private $section5Complete = false;

    /**
     * @var boolean
     */
    private $section6Complete = false;

    /**
     * @var boolean
     */
    private $section7Complete = false;

    /**
     * @var boolean
     */
    private $section8Complete = false;

    /**
     * @var boolean
     */
    private $section9Complete = false;

    /**
     * @var boolean
     */
    private $section10Complete = false;

    /**
     * @var boolean
     */
    private $section11Complete = false;

    /**
     * @var string
     */
    private $learnAboutUs;

     /**
     * @var boolean
     */
    private $isTraceCertified = false;

    /**
     * @var \AppBundle\Entity\CompanyAddress
     */
    private $addresses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $gat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $documents;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contacts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $references;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $directors;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $shareholders;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $crbCheck;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $verification;


    /**
     * @var \AppBundle\Entity\CompanyType
     */
    private $companyType;

    /**
     * @var \AppBundle\Entity\Member
     */
    private $registeredBy;

    /**
     * @var \AppBundle\Entity\PromoCode
     */
    private $promoCode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $provinces;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $members;

    protected $exportContacts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gat = new \Doctrine\Common\Collections\ArrayCollection();
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->references = new \Doctrine\Common\Collections\ArrayCollection();
        $this->directors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shareholders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->crbCheck = new \Doctrine\Common\Collections\ArrayCollection();
        $this->verification = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->provinces = new \Doctrine\Common\Collections\ArrayCollection();
        $this->members = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subscription = new ArrayCollection();
        $this->payments = new ArrayCollection();
        $this->requests = new ArrayCollection();
        $this->teamMembers = new ArrayCollection();
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
     * @return Company
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
     * Set registrationNumber
     *
     * @param string $registrationNumber
     *
     * @return Company
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }

    /**
     * Get registrationNumber
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * Set graTinNumber
     *
     * @param string $graTinNumber
     *
     * @return Company
     */
    public function setGraTinNumber($graTinNumber)
    {
        $this->graTinNumber = $graTinNumber;

        return $this;
    }

    /**
     * Get graTinNumber
     *
     * @return string
     */
    public function getGraTinNumber()
    {
        return $this->graTinNumber;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return Company
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set natureOfBusiness
     *
     * @param string $natureOfBusiness
     *
     * @return Company
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
     * Set tradingName
     *
     * @param string $tradingName
     *
     * @return Company
     */
    public function setTradingName($tradingName)
    {
        $this->tradingName = $tradingName;

        return $this;
    }

    /**
     * Get tradingName
     *
     * @return string
     */
    public function getTradingName()
    {
        return $this->tradingName;
    }

    /**
     * Set parentCompany
     *
     * @param string $parentCompany
     *
     * @return Company
     */
    public function setParentCompany($parentCompany)
    {
        $this->parentCompany = $parentCompany;

        return $this;
    }

    /**
     * Get parentCompany
     *
     * @return string
     */
    public function getParentCompany()
    {
        return $this->parentCompany;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Company
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
     * Set website
     *
     * @param string $website
     *
     * @return Company
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Company
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
     * Set companyLogo
     *
     * @param string $companyLogo
     *
     * @return Company
     */
    public function setCompanyLogo($companyLogo)
    {
        $this->companyLogo = $companyLogo;

        return $this;
    }

    /**
     * Get companyLogo
     *
     * @return string
     */
    public function getCompanyLogo()
    {
        return $this->companyLogo;
    }

    /**
     * Set memberType
     *
     * @param string $memberType
     *
     * @return Company
     */
    public function setMemberType($memberType)
    {
        $this->memberType = $memberType;

        return $this;
    }

    /**
     * Get memberType
     *
     * @return string
     */
    public function getMemberType()
    {
        return $this->memberType;
    }

    /**
     * Set powerOfAttorney
     *
     * @param boolean $powerOfAttorney
     *
     * @return Company
     */
    public function setPowerOfAttorney($powerOfAttorney)
    {
        $this->powerOfAttorney = $powerOfAttorney;

        return $this;
    }

    /**
     * Get powerOfAttorney
     *
     * @return boolean
     */
    public function getPowerOfAttorney()
    {
        return $this->powerOfAttorney;
    }

    /**
     * Set powerOfAttorneyFile
     *
     * @param string $powerOfAttorneyFile
     *
     * @return Company
     */
    public function setPowerOfAttorneyFile($powerOfAttorneyFile)
    {
        $this->powerOfAttorneyFile = $powerOfAttorneyFile;

        return $this;
    }

    /**
     * Get powerOfAttorneyFile
     *
     * @return string
     */
    public function getPowerOfAttorneyFile()
    {
        return $this->powerOfAttorneyFile;
    }

    /**
     * Set numberOfBranches
     *
     * @param integer $numberOfBranches
     *
     * @return Company
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
     * Set numberOfEmployees
     *
     * @param integer $numberOfEmployees
     *
     * @return Company
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;

        return $this;
    }

    /**
     * Get numberOfEmployees
     *
     * @return integer
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * Set shareOfGhanaianEmployees
     *
     * @param integer $shareOfGhanaianEmployees
     *
     * @return Company
     */
    public function setShareOfKenyanEmployees($shareOfGhanaianEmployees)
    {
        $this->shareOfGhanaianEmployees = $shareOfGhanaianEmployees;

        return $this;
    }

    /**
     * Get shareOfGhanaianEmployees
     *
     * @return integer
     */
    public function getShareOfKenyanEmployees()
    {
        return $this->shareOfGhanaianEmployees;
    }

    /**
     * Set shareOfGhanaianManagementEmployees
     *
     * @param integer $shareOfGhanaianManagementEmployees
     *
     * @return Company
     */
    public function setShareOfKenyanManagementEmployees($shareOfGhanaianManagementEmployees)
    {
        $this->shareOfGhanaianManagementEmployees = $shareOfGhanaianManagementEmployees;

        return $this;
    }

    /**
     * Get shareOfGhanaianManagementEmployees
     *
     * @return integer
     */
    public function getShareOfKenyanManagementEmployees()
    {
        return $this->shareOfGhanaianManagementEmployees;
    }

    /**
     * Set shareOfGhanaianDirectors
     *
     * @param integer $shareOfGhanaianDirectors
     *
     * @return Company
     */
    public function setShareOfKenyanDirectors($shareOfGhanaianDirectors)
    {
        $this->shareOfGhanaianDirectors = $shareOfGhanaianDirectors;

        return $this;
    }

    /**
     * Get shareOfGhanaianDirectors
     *
     * @return integer
     */
    public function getShareOfKenyanDirectors()
    {
        return $this->shareOfGhanaianDirectors;
    }

    /**
     * Set localContent
     *
     * @param boolean $localContent
     *
     * @return Company
     */
    public function setLocalContent($localContent)
    {
        $this->localContent = $localContent;

        return $this;
    }

    /**
     * Get localContent
     *
     * @return boolean
     */
    public function getLocalContent()
    {
        return $this->localContent;
    }

    /**
     * Set localContentFile
     *
     * @param string $localContentFile
     *
     * @return Company
     */
    public function setLocalContentFile($localContentFile)
    {
        $this->localContentFile = $localContentFile;

        return $this;
    }

    /**
     * Get localContentFile
     *
     * @return string
     */
    public function getLocalContentFile()
    {
        return $this->localContentFile;
    }

    /**
     * Set ghanaianOwnershipPercentage
     *
     * @param integer $ghanaianOwnershipPercentage
     *
     * @return Company
     */
    public function setKenyanOwnershipPercentage($ghanaianOwnershipPercentage)
    {
        $this->ghanaianOwnershipPercentage = $ghanaianOwnershipPercentage;

        return $this;
    }

    /**
     * Get ghanaianOwnershipPercentage
     *
     * @return integer
     */
    public function getKenyanOwnershipPercentage()
    {
        return $this->ghanaianOwnershipPercentage;
    }

    /**
     * Set nominalCapital
     *
     * @param string $nominalCapital
     *
     * @return Company
     */
    public function setNominalCapital($nominalCapital)
    {
        $this->nominalCapital = $nominalCapital;

        return $this;
    }

    /**
     * Get nominalCapital
     *
     * @return string
     */
    public function getNominalCapital()
    {
        return $this->nominalCapital;
    }

    /**
     * Set issuedCapital
     *
     * @param string $issuedCapital
     *
     * @return Company
     */
    public function setIssuedCapital($issuedCapital)
    {
        $this->issuedCapital = $issuedCapital;

        return $this;
    }

    /**
     * Get issuedCapital
     *
     * @return string
     */
    public function getIssuedCapital()
    {
        return $this->issuedCapital;
    }

    /**
     * Set authorisedCapital
     *
     * @param string $authorisedCapital
     *
     * @return Company
     */
    public function setAuthorisedCapital($authorisedCapital)
    {
        $this->authorisedCapital = $authorisedCapital;

        return $this;
    }

    /**
     * Get authorisedCapital
     *
     * @return string
     */
    public function getAuthorisedCapital()
    {
        return $this->authorisedCapital;
    }

    /**
     * Set ownershipWomen
     *
     * @param boolean $ownershipWomen
     *
     * @return Company
     */
    public function setOwnershipWomen($ownershipWomen)
    {
        $this->ownershipWomen = $ownershipWomen;

        return $this;
    }

    /**
     * Get ownershipWomen
     *
     * @return boolean
     */
    public function getOwnershipWomen()
    {
        return $this->ownershipWomen;
    }

    /**
     * Set ownershipUnder30
     *
     * @param boolean $ownershipUnder30
     *
     * @return Company
     */
    public function setOwnershipUnder30($ownershipUnder30)
    {
        $this->ownershipUnder30 = $ownershipUnder30;

        return $this;
    }

    /**
     * Get ownershipUnder30
     *
     * @return boolean
     */
    public function getOwnershipUnder30()
    {
        return $this->ownershipUnder30;
    }

    /**
     * Set employDisabled
     *
     * @param boolean $employDisabled
     *
     * @return Company
     */
    public function setEmployDisabled($employDisabled)
    {
        $this->employDisabled = $employDisabled;

        return $this;
    }

    /**
     * Get employDisabled
     *
     * @return boolean
     */
    public function getEmployDisabled()
    {
        return $this->employDisabled;
    }

    /**
     * Set bankName
     *
     * @param string $bankName
     *
     * @return Company
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set bankBranch
     *
     * @param string $bankBranch
     *
     * @return Company
     */
    public function setBankBranch($bankBranch)
    {
        $this->bankBranch = $bankBranch;

        return $this;
    }

    /**
     * Get bankBranch
     *
     * @return string
     */
    public function getBankBranch()
    {
        return $this->bankBranch;
    }

    /**
     * Set bankruptcy
     *
     * @param boolean $bankruptcy
     *
     * @return Company
     */
    public function setBankruptcy($bankruptcy)
    {
        $this->bankruptcy = $bankruptcy;

        return $this;
    }

    /**
     * Get bankruptcy
     *
     * @return boolean
     */
    public function getBankruptcy()
    {
        return $this->bankruptcy;
    }

    /**
     * Set creditChecks
     *
     * @param boolean $creditChecks
     *
     * @return Company
     */
    public function setCreditChecks($creditChecks)
    {
        $this->creditChecks = $creditChecks;

        return $this;
    }

    /**
     * Get creditChecks
     *
     * @return boolean
     */
    public function getCreditChecks()
    {
        return $this->creditChecks;
    }

    /**
     * Set bankTel
     *
     * @param string $bankTel
     *
     * @return Company
     */
    public function setBankTel($bankTel)
    {
        $this->bankTel = $bankTel;

        return $this;
    }

    /**
     * Get bankTel
     *
     * @return string
     */
    public function getBankTel()
    {
        return $this->bankTel;
    }

    /**
     * Set approxTurnover
     *
     * @param string $approxTurnover
     *
     * @return Company
     */
    public function setApproxTurnover($approxTurnover)
    {
        $this->approxTurnover = $approxTurnover;

        return $this;
    }

    /**
     * Get approxTurnover
     *
     * @return string
     */
    public function getApproxTurnover()
    {
        return $this->approxTurnover;
    }

    /**
     * Set auditedStatements
     *
     * @param string $auditedStatements
     *
     * @return Company
     */
    public function setAuditedStatements($auditedStatements)
    {
        $this->auditedStatements = $auditedStatements;

        return $this;
    }

    /**
     * Get auditedStatements
     *
     * @return string
     */
    public function getAuditedStatements()
    {
        return $this->auditedStatements;
    }

    /**
     * Set debarred
     *
     * @param boolean $debarred
     *
     * @return Company
     */
    public function setDebarred($debarred)
    {
        $this->debarred = $debarred;

        return $this;
    }

    /**
     * Get debarred
     *
     * @return boolean
     */
    public function getDebarred()
    {
        return $this->debarred;
    }

    /**
     * Set criminalOffence
     *
     * @param boolean $criminalOffence
     *
     * @return Company
     */
    public function setCriminalOffence($criminalOffence)
    {
        $this->criminalOffence = $criminalOffence;

        return $this;
    }

    /**
     * Get criminalOffence
     *
     * @return boolean
     */
    public function getCriminalOffence()
    {
        return $this->criminalOffence;
    }

    /**
     * Set conflictOfInterest
     *
     * @param boolean $conflictOfInterest
     *
     * @return Company
     */
    public function setConflictOfInterest($conflictOfInterest)
    {
        $this->conflictOfInterest = $conflictOfInterest;

        return $this;
    }

    /**
     * Get conflictOfInterest
     *
     * @return boolean
     */
    public function getConflictOfInterest()
    {
        return $this->conflictOfInterest;
    }

    /**
     * Set conflictOfInterestIIA
     *
     * @param boolean $conflictOfInterestIIA
     *
     * @return Company
     */
    public function setConflictOfInterestIIA($conflictOfInterestIIA)
    {
        $this->conflictOfInterestIIA = $conflictOfInterestIIA;

        return $this;
    }

    /**
     * Get conflictOfInterestIIA
     *
     * @return boolean
     */
    public function getConflictOfInterestIIA()
    {
        return $this->conflictOfInterestIIA;
    }

    /**
     * Set declareTrue
     *
     * @param boolean $declareTrue
     *
     * @return Company
     */
    public function setDeclareTrue($declareTrue)
    {
        $this->declareTrue = $declareTrue;

        return $this;
    }

    /**
     * Get declareTrue
     *
     * @return boolean
     */
    public function getDeclareTrue()
    {
        return $this->declareTrue;
    }

    /**
     * Set understandRisks
     *
     * @param boolean $understandRisks
     *
     * @return Company
     */
    public function setUnderstandRisks($understandRisks)
    {
        $this->understandRisks = $understandRisks;

        return $this;
    }

    /**
     * Get understandRisks
     *
     * @return boolean
     */
    public function getUnderstandRisks()
    {
        return $this->understandRisks;
    }

    /**
     * Set isOnSourceDogg
     *
     * @param boolean $isOnSourceDogg
     *
     * @return Company
     */
    public function setIsOnSourceDogg($isOnSourceDogg)
    {
        $this->isOnSourceDogg = $isOnSourceDogg;

        return $this;
    }

    /**
     * Get isOnSourceDogg
     *
     * @return boolean
     */
    public function getIsOnSourceDogg()
    {
        return $this->isOnSourceDogg;
    }

    /**
     * Set amountDue
     *
     * @param string $amountDue
     *
     * @return Company
     */
    public function setAmountDue($amountDue)
    {
        $this->amountDue = $amountDue;

        return $this;
    }

    /**
     * Get amountDue
     *
     * @return string
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Company
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
     * @return Company
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
     * Set subscriptionDate
     *
     * @param \DateTime $subscriptionDate
     *
     * @return Company
     */
    public function setSubscriptionDate($subscriptionDate)
    {
        $this->subscriptionDate = $subscriptionDate;

        return $this;
    }

    /**
     * Get subscriptionDate
     *
     * @return \DateTime
     */
    public function getSubscriptionDate()
    {
        return $this->subscriptionDate;
    }

    /**
     * Set paymentReference
     *
     * @param string $paymentReference
     *
     * @return Company
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
     * Set status
     *
     * @param string $status
     *
     * @return Company
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
     * Set paymentReceived
     *
     * @param boolean $paymentReceived
     *
     * @return Company
     */
    public function setPaymentReceived($paymentReceived)
    {
        $this->paymentReceived = $paymentReceived;

        return $this;
    }

    /**
     * Get paymentReceived
     *
     * @return boolean
     */
    public function getPaymentReceived()
    {
        return $this->paymentReceived;
    }

    /**
     * Set isFullyPaidUp
     *
     * @param boolean $isFullyPaidUp
     *
     * @return Company
     */
    public function setIsFullyPaidUp($isFullyPaidUp)
    {
        $this->isFullyPaidUp = $isFullyPaidUp;

        return $this;
    }

    /**
     * Get isFullyPaidUp
     *
     * @return boolean
     */
    public function getIsFullyPaidUp()
    {
        return $this->isFullyPaidUp;
    }

    /**
     * Set isInvoiced
     *
     * @param boolean $isInvoiced
     *
     * @return Company
     */
    public function setIsInvoiced($isInvoiced)
    {
        $this->isInvoiced = $isInvoiced;

        return $this;
    }

    /**
     * Get isInvoiced
     *
     * @return boolean
     */
    public function getIsInvoiced()
    {
        return $this->isInvoiced;
    }

    /**
     * Set isReceipted
     *
     * @param boolean $isReceipted
     *
     * @return Company
     */
    public function setIsReceipted($isReceipted)
    {
        $this->isReceipted = $isReceipted;

        return $this;
    }

    /**
     * Get isReceipted
     *
     * @return boolean
     */
    public function getIsReceipted()
    {
        return $this->isReceipted;
    }

    /**
     * Set iiaValidated
     *
     * @param boolean $iiaValidated
     *
     * @return Company
     */
    public function setIiaValidated($iiaValidated)
    {
        $this->iiaValidated = $iiaValidated;

        return $this;
    }

    /**
     * Get iiaValidated
     *
     * @return boolean
     */
    public function getIiaValidated()
    {
        return $this->iiaValidated;
    }

    /**
     * Set crbChecked
     *
     * @param boolean $crbChecked
     *
     * @return Company
     */
    public function setCrbChecked($crbChecked)
    {
        $this->crbChecked = $crbChecked;

        return $this;
    }

    /**
     * Get crbChecked
     *
     * @return boolean
     */
    public function getCrbChecked()
    {
        return $this->crbChecked;
    }

    /**
     * Set hiveBriteId
     *
     * @param integer $hiveBriteId
     *
     * @return Company
     */
    public function setHiveBriteId($hiveBriteId)
    {
        $this->hiveBriteId = $hiveBriteId;

        return $this;
    }

    /**
     * Get hiveBriteId
     *
     * @return integer
     */
    public function getHiveBriteId()
    {
        return $this->hiveBriteId;
    }

    /**
     * Set hiveBriteNetworkId
     *
     * @param integer $hiveBriteNetworkId
     *
     * @return Company
     */
    public function setHiveBriteNetworkId($hiveBriteNetworkId)
    {
        $this->hiveBriteNetworkId = $hiveBriteNetworkId;

        return $this;
    }

    /**
     * Get hiveBriteNetworkId
     *
     * @return integer
     */
    public function getHiveBriteNetworkId()
    {
        return $this->hiveBriteNetworkId;
    }

    /**
     * Set section1Complete
     *
     * @param boolean $section1Complete
     *
     * @return Company
     */
    public function setSection1Complete($section1Complete)
    {
        $this->section1Complete = $section1Complete;

        return $this;
    }

    /**
     * Get section1Complete
     *
     * @return boolean
     */
    public function getSection1Complete()
    {
        return $this->section1Complete;
    }

    /**
     * Set section2Complete
     *
     * @param boolean $section2Complete
     *
     * @return Company
     */
    public function setSection2Complete($section2Complete)
    {
        $this->section2Complete = $section2Complete;

        return $this;
    }

    /**
     * Get section2Complete
     *
     * @return boolean
     */
    public function getSection2Complete()
    {
        return $this->section2Complete;
    }

    /**
     * Set section3Complete
     *
     * @param boolean $section3Complete
     *
     * @return Company
     */
    public function setSection3Complete($section3Complete)
    {
        $this->section3Complete = $section3Complete;

        return $this;
    }

    /**
     * Get section3Complete
     *
     * @return boolean
     */
    public function getSection3Complete()
    {
        return $this->section3Complete;
    }

    /**
     * Set section4Complete
     *
     * @param boolean $section4Complete
     *
     * @return Company
     */
    public function setSection4Complete($section4Complete)
    {
        $this->section4Complete = $section4Complete;

        return $this;
    }

    /**
     * Get section4Complete
     *
     * @return boolean
     */
    public function getSection4Complete()
    {
        return $this->section4Complete;
    }

    /**
     * Set section5Complete
     *
     * @param boolean $section5Complete
     *
     * @return Company
     */
    public function setSection5Complete($section5Complete)
    {
        $this->section5Complete = $section5Complete;

        return $this;
    }

    /**
     * Get section5Complete
     *
     * @return boolean
     */
    public function getSection5Complete()
    {
        return $this->section5Complete;
    }

    /**
     * Set section6Complete
     *
     * @param boolean $section6Complete
     *
     * @return Company
     */
    public function setSection6Complete($section6Complete)
    {
        $this->section6Complete = $section6Complete;

        return $this;
    }

    /**
     * Get section6Complete
     *
     * @return boolean
     */
    public function getSection6Complete()
    {
        return $this->section6Complete;
    }

    /**
     * Set section7Complete
     *
     * @param boolean $section7Complete
     *
     * @return Company
     */
    public function setSection7Complete($section7Complete)
    {
        $this->section7Complete = $section7Complete;

        return $this;
    }

    /**
     * Get section7Complete
     *
     * @return boolean
     */
    public function getSection7Complete()
    {
        return $this->section7Complete;
    }

    /**
     * Set section8Complete
     *
     * @param boolean $section8Complete
     *
     * @return Company
     */
    public function setSection8Complete($section8Complete)
    {
        $this->section8Complete = $section8Complete;

        return $this;
    }

    /**
     * Get section8Complete
     *
     * @return boolean
     */
    public function getSection8Complete()
    {
        return $this->section8Complete;
    }

    /**
     * Set section9Complete
     *
     * @param boolean $section9Complete
     *
     * @return Company
     */
    public function setSection9Complete($section9Complete)
    {
        $this->section9Complete = $section9Complete;

        return $this;
    }

    /**
     * Get section9Complete
     *
     * @return boolean
     */
    public function getSection9Complete()
    {
        return $this->section9Complete;
    }

    /**
     * Set section10Complete
     *
     * @param boolean $section10Complete
     *
     * @return Company
     */
    public function setSection10Complete($section10Complete)
    {
        $this->section10Complete = $section10Complete;

        return $this;
    }

    /**
     * Get section10Complete
     *
     * @return boolean
     */
    public function getSection10Complete()
    {
        return $this->section10Complete;
    }

    /**
     * Set section11Complete
     *
     * @param boolean $section11Complete
     *
     * @return Company
     */
    public function setSection11Complete($section11Complete)
    {
        $this->section11Complete = $section11Complete;

        return $this;
    }

    /**
     * Get section11Complete
     *
     * @return boolean
     */
    public function getSection11Complete()
    {
        return $this->section11Complete;
    }

    /**
     * Set learnAboutUs
     *
     * @param string $learnAboutUs
     *
     * @return Company
     */
    public function setLearnAboutUs($learnAboutUs)
    {
        $this->learnAboutUs = $learnAboutUs;

        return $this;
    }

    /**
     * Get learnAboutUs
     *
     * @return string
     */
    public function getLearnAboutUs()
    {
        return $this->learnAboutUs;
    }

    /**
     * Set addresses
     *
     * @param \AppBundle\Entity\CompanyAddress $addresses
     *
     * @return Company
     */
    public function setAddresses(\AppBundle\Entity\CompanyAddress $addresses = null)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * Get addresses
     *
     * @return \AppBundle\Entity\CompanyAddress
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Add gat
     *
     * @param \AppBundle\Entity\CompanyGAT $gat
     *
     * @return Company
     */
    public function addGat(\AppBundle\Entity\CompanyGAT $gat)
    {
        $this->gat[] = $gat;

        return $this;
    }

    /**
     * Remove gat
     *
     * @param \AppBundle\Entity\CompanyGAT $gat
     */
    public function removeGat(\AppBundle\Entity\CompanyGAT $gat)
    {
        $this->gat->removeElement($gat);
    }

    /**
     * Get gat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGat()
    {
        return $this->gat;
    }

    /**
     * Add document
     *
     * @param \AppBundle\Entity\CompanyDocumentation $document
     *
     * @return Company
     */
    public function addDocument(\AppBundle\Entity\CompanyDocumentation $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \AppBundle\Entity\CompanyDocumentation $document
     */
    public function removeDocument(\AppBundle\Entity\CompanyDocumentation $document)
    {
        $this->documents->removeElement($document);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Add contact
     *
     * @param \AppBundle\Entity\CompanyContact $contact
     *
     * @return Company
     */
    public function addContact(\AppBundle\Entity\CompanyContact $contact)
    {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * Remove contact
     *
     * @param \AppBundle\Entity\CompanyContact $contact
     */
    public function removeContact(\AppBundle\Entity\CompanyContact $contact)
    {
        $this->contacts->removeElement($contact);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Add reference
     *
     * @param \AppBundle\Entity\CompanyReference $reference
     *
     * @return Company
     */
    public function addReference(\AppBundle\Entity\CompanyReference $reference)
    {
        $this->references[] = $reference;

        return $this;
    }

    /**
     * Remove reference
     *
     * @param \AppBundle\Entity\CompanyReference $reference
     */
    public function removeReference(\AppBundle\Entity\CompanyReference $reference)
    {
        $this->references->removeElement($reference);
    }

    /**
     * Get references
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Add director
     *
     * @param \AppBundle\Entity\CompanyDirector $director
     *
     * @return Company
     */
    public function addDirector(\AppBundle\Entity\CompanyDirector $director)
    {
        $this->directors[] = $director;

        return $this;
    }

    /**
     * Remove director
     *
     * @param \AppBundle\Entity\CompanyDirector $director
     */
    public function removeDirector(\AppBundle\Entity\CompanyDirector $director)
    {
        $this->directors->removeElement($director);
    }

    /**
     * Get directors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * Add shareholder
     *
     * @param \AppBundle\Entity\CompanyShareholding $shareholder
     *
     * @return Company
     */
    public function addShareholder(\AppBundle\Entity\CompanyShareholding $shareholder)
    {
        $this->shareholders[] = $shareholder;

        return $this;
    }

    /**
     * Remove shareholder
     *
     * @param \AppBundle\Entity\CompanyShareholding $shareholder
     */
    public function removeShareholder(\AppBundle\Entity\CompanyShareholding $shareholder)
    {
        $this->shareholders->removeElement($shareholder);
    }

    /**
     * Get shareholders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getShareholders()
    {
        return $this->shareholders;
    }

    /**
     * Add crbCheck
     *
     * @param \AppBundle\Entity\CrbCheck $crbCheck
     *
     * @return Company
     */
    public function addCrbCheck(\AppBundle\Entity\CrbCheck $crbCheck)
    {
        $this->crbCheck[] = $crbCheck;

        return $this;
    }

    /**
     * Remove crbCheck
     *
     * @param \AppBundle\Entity\CrbCheck $crbCheck
     */
    public function removeCrbCheck(\AppBundle\Entity\CrbCheck $crbCheck)
    {
        $this->crbCheck->removeElement($crbCheck);
    }

    /**
     * Get crbCheck
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCrbCheck()
    {
        return $this->crbCheck;
    }

    /**
     * Add verification
     *
     * @param \AppBundle\Entity\CompanyVerification $verification
     *
     * @return Company
     */
    public function addVerification(\AppBundle\Entity\CompanyVerification $verification)
    {
        $this->verification[] = $verification;

        return $this;
    }

    /**
     * Remove verification
     *
     * @param \AppBundle\Entity\CompanyVerification $verification
     */
    public function removeVerification(\AppBundle\Entity\CompanyVerification $verification)
    {
        $this->verification->removeElement($verification);
    }

    /**
     * Get verification
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Set companyType
     *
     * @param \AppBundle\Entity\CompanyType $companyType
     *
     * @return Company
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
     * Set registeredBy
     *
     * @param \AppBundle\Entity\Member $registeredBy
     *
     * @return Company
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
     * Set promoCode
     *
     * @param \AppBundle\Entity\PromoCode $promoCode
     *
     * @return Company
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
     * Add category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Company
     */
    public function addCategory(\AppBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\Category $category
     */
    public function removeCategory(\AppBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add province
     *
     * @param \AppBundle\Entity\Province $province
     *
     * @return Company
     */
    public function addProvince(\AppBundle\Entity\Province $province)
    {
        $this->provinces[] = $province;

        return $this;
    }

    /**
     * Remove province
     *
     * @param \AppBundle\Entity\Province $province
     */
    public function removeProvince(\AppBundle\Entity\Province $province)
    {
        $this->provinces->removeElement($province);
    }

    /**
     * Get provinces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProvinces()
    {
        return $this->provinces;
    }

    /**
     * Add member
     *
     * @param \AppBundle\Entity\Member $member
     *
     * @return Company
     */
    public function addMember(\AppBundle\Entity\Member $member)
    {
        $this->members[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \AppBundle\Entity\Member $member
     */
    public function removeMember(\AppBundle\Entity\Member $member)
    {
        $this->members->removeElement($member);
    }

    /**
     * Get members
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMembers()
    {
        return $this->members;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
      $this->setPaymentReference(strtoupper(Utils::randomChars(8)));
      $this->setSlug(Utils::slugify($this->getName()));
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
      $this->setSlug(Utils::slugify($this->getName()));
    }

    public function getSolePropriterId()
    {
      $docs = $this->getDocuments();
      $idNo = null;
      foreach($docs as $doc)
      {
        if($doc->getDocumentType()->getName() == 'Copy of National ID/Passport of the Owner' && is_numeric($doc->getDocumentNumber()))
        {
          $idNo = $doc->getDocumentNumber();
        }
      }
      return $idNo;
    }

    public function checkBalance($reg)
    {
      $ded = 0;
      if($this->getPromoCode() != null)
      {
        if($this->getPromoCode()->getIsPercentage())
        {
          $ded = $reg * ($this->getPromoCode()->getAmountOff()/100);
        }
        else {
          $ded = $this->getPromoCode()->getAmountOff();
        }
      }
      return $reg - $ded;
    }

    public function getValidationStatus($sort = null)
    {
      $current_status = [];
      foreach($this->getVerification() as $ver)
      {
        if($ver->getStatus() != 'Not Started')
        {
          array_push($current_status,['status' => $ver->getStatus(),'date' => $ver->getUpdatedAt(), 'remarks' => $ver->getRemarks(), 'step' => $ver->getVerificationStep(), 'approval_status' => $ver->getApprovalStatus(),'by_who' => $ver->getVerifiedBy() ]);
        }
      }
      if(empty($current_status))
      {
        $first = $this->getVerification()->first();
        //echo $first[0]->getId());
        if($first)
        {
          array_push($current_status,['status' => $first->getStatus(),'date' => $first->getCreatedAt(), 'remarks' => $first->getRemarks(), 'step' => $first->getVerificationStep(), 'by_who' => $first->getVerifiedBy() ]);
        }
      }
      if($sort && !empty($current_status))
      {
        $current_status = array_reverse(Utils::columnSort($current_status, 'step'));
      }

      return $current_status;
    }

    public function readyForValidation()
    {
      $ready = false;
      if($this->getSection1Complete() && $this->getSection2Complete() && $this->getSection3Complete() && $this->getSection4Complete() && $this->getSection5Complete())
      {
        $ready = true;
      }
      return $ready;
    }

    public function __toString()
    {
      return $this->getName() == null ? 'New' : $this->getName();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $payments;


    /**
     * Add payment
     *
     * @param \AppBundle\Entity\Payment $payment
     *
     * @return Company
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
     * @var string
     */
    private $membershipCategory;


    /**
     * Set membershipCategory
     *
     * @param string $membershipCategory
     *
     * @return Company
     */
    public function setMembershipCategory($membershipCategory)
    {
        $this->membershipCategory = $membershipCategory;

        return $this;
    }

    /**
     * Get membershipCategory
     *
     * @return string
     */
    public function getMembershipCategory()
    {
        return $this->membershipCategory;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subscription;


    /**
     * Add subscription
     *
     * @param \AppBundle\Entity\CompanySubscription $subscription
     *
     * @return Company
     */
    public function addSubscription(\AppBundle\Entity\CompanySubscription $subscription)
    {
        $this->subscription[] = $subscription;

        return $this;
    }

    /**
     * Remove subscription
     *
     * @param \AppBundle\Entity\CompanySubscription $subscription
     */
    public function removeSubscription(\AppBundle\Entity\CompanySubscription $subscription)
    {
        $this->subscription->removeElement($subscription);
    }

    /**
     * Get subscription
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Set shareOfGhanaianEmployees.
     *
     * @param int|null $shareOfGhanaianEmployees
     *
     * @return Company
     */
    public function setShareOfGhanaianEmployees($shareOfGhanaianEmployees = null)
    {
        $this->shareOfGhanaianEmployees = $shareOfGhanaianEmployees;

        return $this;
    }

    /**
     * Get shareOfGhanaianEmployees.
     *
     * @return int|null
     */
    public function getShareOfGhanaianEmployees()
    {
        return $this->shareOfGhanaianEmployees;
    }

    /**
     * Set shareOfGhanaianManagementEmployees.
     *
     * @param int|null $shareOfGhanaianManagementEmployees
     *
     * @return Company
     */
    public function setShareOfGhanaianManagementEmployees($shareOfGhanaianManagementEmployees = null)
    {
        $this->shareOfGhanaianManagementEmployees = $shareOfGhanaianManagementEmployees;

        return $this;
    }

    /**
     * Get shareOfGhanaianManagementEmployees.
     *
     * @return int|null
     */
    public function getShareOfGhanaianManagementEmployees()
    {
        return $this->shareOfGhanaianManagementEmployees;
    }

    /**
     * Set shareOfGhanaianDirectors.
     *
     * @param int|null $shareOfGhanaianDirectors
     *
     * @return Company
     */
    public function setShareOfGhanaianDirectors($shareOfGhanaianDirectors = null)
    {
        $this->shareOfGhanaianDirectors = $shareOfGhanaianDirectors;

        return $this;
    }

    /**
     * Get shareOfGhanaianDirectors.
     *
     * @return int|null
     */
    public function getShareOfGhanaianDirectors()
    {
        return $this->shareOfGhanaianDirectors;
    }

    /**
     * Set ghanaianOwnershipPercentage.
     *
     * @param int|null $ghanaianOwnershipPercentage
     *
     * @return Company
     */
    public function setGhanaianOwnershipPercentage($ghanaianOwnershipPercentage = null)
    {
        $this->ghanaianOwnershipPercentage = $ghanaianOwnershipPercentage;

        return $this;
    }

    /**
     * Get ghanaianOwnershipPercentage.
     *
     * @return int|null
     */
    public function getGhanaianOwnershipPercentage()
    {
        return $this->ghanaianOwnershipPercentage;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $company;


    /**
     * Add company.
     *
     * @param \AppBundle\Entity\CompanyRequest $company
     *
     * @return Company
     */
    public function addCompany(\AppBundle\Entity\CompanyRequest $company)
    {
        $this->company[] = $company;

        return $this;
    }

    /**
     * Remove company.
     *
     * @param \AppBundle\Entity\CompanyRequest $company
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCompany(\AppBundle\Entity\CompanyRequest $company)
    {
        return $this->company->removeElement($company);
    }

    /**
     * Get company.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $requests;


    /**
     * Add request.
     *
     * @param \AppBundle\Entity\CompanyRequest $request
     *
     * @return Company
     */
    public function addRequest(\AppBundle\Entity\CompanyRequest $request)
    {
        $this->requests[] = $request;

        return $this;
    }

    /**
     * Remove request.
     *
     * @param \AppBundle\Entity\CompanyRequest $request
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRequest(\AppBundle\Entity\CompanyRequest $request)
    {
        return $this->requests->removeElement($request);
    }

    /**
     * Get requests.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRequests()
    {
        return $this->requests;
    }

    public function getSectorsArray($string = null)
    {
      if($string == null)
      {
        $sectors = [];
      }
      else {
        $sectors = '';
      }
      $cnt = 1;
      foreach($this->getCategories() as $category)
      {
        if($string == null)  {
          array_push($sectors,['id' => $category->getId(), 'name' => $category->getName()]);
        }
        else {
          $sectors .= $category->getName();
          if($cnt < count($this->getCategories()))
          {
            $sectors .= '<br/>';
          }
          $cnt++;
        }
      }
      return $sectors;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $teamMembers;


    /**
     * Add teamMember.
     *
     * @param \AppBundle\Entity\CompanyMembership $teamMember
     *
     * @return Company
     */
    public function addTeamMember(\AppBundle\Entity\CompanyMembership $teamMember)
    {
        $this->teamMembers[] = $teamMember;

        return $this;
    }

    /**
     * Remove teamMember.
     *
     * @param \AppBundle\Entity\CompanyMembership $teamMember
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTeamMember(\AppBundle\Entity\CompanyMembership $teamMember)
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
     * @var int|null
     */
    private $disabledNo = 0;


    /**
     * Set disabledNo.
     *
     * @param int|null $disabledNo
     *
     * @return Company
     */
    public function setDisabledNo($disabledNo = null)
    {
        $this->disabledNo = $disabledNo;

        return $this;
    }

    /**
     * Get disabledNo.
     *
     * @return int|null
     */
    public function getDisabledNo()
    {
        return $this->disabledNo;
    }
    /**
     * @var string|null
     */
    private $womanOwnershipPercentage;


    /**
     * Set womanOwnershipPercentage.
     *
     * @param string|null $womanOwnershipPercentage
     *
     * @return Company
     */
    public function setWomanOwnershipPercentage($womanOwnershipPercentage = null)
    {
        $this->womanOwnershipPercentage = $womanOwnershipPercentage;

        return $this;
    }

    /**
     * Get womanOwnershipPercentage.
     *
     * @return string|null
     */
    public function getWomanOwnershipPercentage()
    {
        return $this->womanOwnershipPercentage;
    }

    public function getAccountRenewal()
    {
      $subscription = $this->getSubscription()->first();
      if(is_object($subscription))
      {
        //echo $subscription->getExpiryDate()->format('d/m/Y');
        return $subscription->getExpiryDate();
      }
    }
    public function getSubscriptionStatus()
    {
      $subscription = $this->getSubscription()->first();
      if(is_object($subscription))
      {
        return $subscription->getIsActive() ? 'Active' : 'Expired';
      }
      else {
        return $this->getStatus() == 'New' ? 'New' : 'Expired';
      }
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $specialGroups;


    /**
     * Add specialGroup.
     *
     * @param \AppBundle\Entity\SpecialGroup $specialGroup
     *
     * @return Company
     */
    public function addSpecialGroup(\AppBundle\Entity\SpecialGroup $specialGroup)
    {
        $this->specialGroups[] = $specialGroup;

        return $this;
    }

    /**
     * Remove specialGroup.
     *
     * @param \AppBundle\Entity\SpecialGroup $specialGroup
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSpecialGroup(\AppBundle\Entity\SpecialGroup $specialGroup)
    {
        return $this->specialGroups->removeElement($specialGroup);
    }

    /**
     * Get specialGroups.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpecialGroups()
    {
        return $this->specialGroups;
    }

    public function getExportContacts()
    {
        $exportContacts = array();
        $i = 1;
        foreach ($this->getContacts() as $contact) {
            $exportContacts[] = $i .
               ') Name:' . $contact->getName() .
               ' Designation:' . $contact->getDesignation() .
               ' Email:' . $contact->getEmail() .
               ' Phone:' . $contact->getPhone()  .
               ' Mobile:' . $contact->getMobile() .
               ' contactAddress:' . $contact->getContactAddress()
               ;
            $i++;
        }
        return $this->exportContacts = join(' , ', $exportContacts);
    }
    public function getExportSectors()
    {
        $exportSectors = array();
        $i = 1;
        foreach ($this->getCategories() as $sector) {
            $exportSectors[] = $i .
               ') ' . $sector->getName() ;
            $i++;
        }
        return $this->exportSectors = join(' , ', $exportSectors);
    }
    /**
     * @var string
     */
    private $currentSubscriptionStatus;


    /**
     * Set currentSubscriptionStatus.
     *
     * @param string $currentSubscriptionStatus
     *
     * @return Company
     */
    public function setCurrentSubscriptionStatus($currentSubscriptionStatus)
    {
        $this->currentSubscriptionStatus = $currentSubscriptionStatus;

        return $this;
    }

    /**
     * Get currentSubscriptionStatus.
     *
     * @return string
     */
    public function getCurrentSubscriptionStatus()
    {
        return $this->currentSubscriptionStatus;
    }
    /**
     * @var \AppBundle\Entity\Tier
     */
    private $tier;


    /**
     * Set tier.
     *
     * @param \AppBundle\Entity\Tier|null $tier
     *
     * @return Company
     */
    public function setTier(\AppBundle\Entity\Tier $tier = null)
    {
        $this->tier = $tier;

        return $this;
    }

    /**
     * Get tier.
     *
     * @return \AppBundle\Entity\Tier|null
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * Set isTraceCertified
     *
     * @param boolean $traceCertified
     *
     * @return Company
     */
    public function setIsTraceCertified($traceCertified)
    {
        $this->isTraceCertified = $traceCertified;

        return $this;
    }

    /**
     * Get isTraceCertified
     *
     * @return boolean
     */
    public function getIsTraceCertified()
    {
        return $this->isTraceCertified;
    }
}
