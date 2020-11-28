<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Utils;

/**
 * Request
 */
class Request
{
    /**
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
    private $summary;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $deadline;

    /**
     * @var string|null
     */
    private $publicUrl;

    /**
     * @var \DateTime|null
     */
    private $expectedDecisionDate;

    /**
     * @var int|null
     */
    private $joinedTotal;

    /**
     * @var \stdClass|null
     */
    private $messagesTotal;

    /**
     * @var int|null
     */
    private $notesTotal;

    /**
     * @var int|null
     */
    private $filesTotal;

    /**
     * @var int|null
     */
    private $currencyId;

    /**
     * @var \DateTime|null
     */
    private $dateModified;

    /**
     * @var \DateTime
     */
    private $publishDate;

    /**
     * @var int|null
     */
    private $invitationsTotal = 0;

    /**
     * @var int|null
     */
    private $responsesTotal = 0;

    /**
     * @var \DateTime|null
     */
    private $createDate;

    /**
     * @var string|null
     */
    private $tenderSource;

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
     * @var bool|null
     */
    private $isPublished = false;

    /**
     * @var int|null
     */
    private $clicks;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $documents;

    /**
     * @var \AppBundle\Entity\RequestType
     */
    private $requestType;

    /**
     * @var \AppBundle\Entity\Buyer
     */
    private $buyer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->responses = new ArrayCollection();
        $this->updates = new ArrayCollection();
        $this->stats = new ArrayCollection();
    }

    /**
     * Set id.
     *
     * @param int $id
     *
     * @return Request
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * @return Request
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
     * Set summary.
     *
     * @param string|null $summary
     *
     * @return Request
     */
    public function setSummary($summary = null)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary.
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Request
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
     * Set deadline.
     *
     * @param \DateTime $deadline
     *
     * @return Request
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline.
     *
     * @return \DateTime
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set publicUrl.
     *
     * @param string|null $publicUrl
     *
     * @return Request
     */
    public function setPublicUrl($publicUrl = null)
    {
        $this->publicUrl = $publicUrl;

        return $this;
    }

    /**
     * Get publicUrl.
     *
     * @return string|null
     */
    public function getPublicUrl()
    {
        return $this->publicUrl;
    }

    /**
     * Set expectedDecisionDate.
     *
     * @param \DateTime|null $expectedDecisionDate
     *
     * @return Request
     */
    public function setExpectedDecisionDate($expectedDecisionDate = null)
    {
        $this->expectedDecisionDate = $expectedDecisionDate;

        return $this;
    }

    /**
     * Get expectedDecisionDate.
     *
     * @return \DateTime|null
     */
    public function getExpectedDecisionDate()
    {
        return $this->expectedDecisionDate;
    }

    /**
     * Set joinedTotal.
     *
     * @param int|null $joinedTotal
     *
     * @return Request
     */
    public function setJoinedTotal($joinedTotal = null)
    {
        $this->joinedTotal = $joinedTotal;

        return $this;
    }

    /**
     * Get joinedTotal.
     *
     * @return int|null
     */
    public function getJoinedTotal()
    {
        return $this->joinedTotal;
    }

    /**
     * Set messagesTotal.
     *
     * @param \stdClass|null $messagesTotal
     *
     * @return Request
     */
    public function setMessagesTotal($messagesTotal = null)
    {
        $this->messagesTotal = $messagesTotal;

        return $this;
    }

    /**
     * Get messagesTotal.
     *
     * @return \stdClass|null
     */
    public function getMessagesTotal()
    {
        return $this->messagesTotal;
    }

    /**
     * Set notesTotal.
     *
     * @param int|null $notesTotal
     *
     * @return Request
     */
    public function setNotesTotal($notesTotal = null)
    {
        $this->notesTotal = $notesTotal;

        return $this;
    }

    /**
     * Get notesTotal.
     *
     * @return int|null
     */
    public function getNotesTotal()
    {
        return $this->notesTotal;
    }

    /**
     * Set filesTotal.
     *
     * @param int|null $filesTotal
     *
     * @return Request
     */
    public function setFilesTotal($filesTotal = null)
    {
        $this->filesTotal = $filesTotal;

        return $this;
    }

    /**
     * Get filesTotal.
     *
     * @return int|null
     */
    public function getFilesTotal()
    {
        return $this->filesTotal;
    }

    /**
     * Set currencyId.
     *
     * @param int|null $currencyId
     *
     * @return Request
     */
    public function setCurrencyId($currencyId = null)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId.
     *
     * @return int|null
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set dateModified.
     *
     * @param \DateTime|null $dateModified
     *
     * @return Request
     */
    public function setDateModified($dateModified = null)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified.
     *
     * @return \DateTime|null
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set publishDate.
     *
     * @param \DateTime $publishDate
     *
     * @return Request
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    /**
     * Get publishDate.
     *
     * @return \DateTime
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * Set invitationsTotal.
     *
     * @param int|null $invitationsTotal
     *
     * @return Request
     */
    public function setInvitationsTotal($invitationsTotal = null)
    {
        $this->invitationsTotal = $invitationsTotal;

        return $this;
    }

    /**
     * Get invitationsTotal.
     *
     * @return int|null
     */
    public function getInvitationsTotal()
    {
        return $this->invitationsTotal;
    }

    /**
     * Set responsesTotal.
     *
     * @param int|null $responsesTotal
     *
     * @return Request
     */
    public function setResponsesTotal($responsesTotal = null)
    {
        $this->responsesTotal = $responsesTotal;

        return $this;
    }

    /**
     * Get responsesTotal.
     *
     * @return int|null
     */
    public function getResponsesTotal()
    {
        return $this->responsesTotal;
    }

    /**
     * Set createDate.
     *
     * @param \DateTime|null $createDate
     *
     * @return Request
     */
    public function setCreateDate($createDate = null)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate.
     *
     * @return \DateTime|null
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set tenderSource.
     *
     * @param string|null $tenderSource
     *
     * @return Request
     */
    public function setTenderSource($tenderSource = null)
    {
        $this->tenderSource = $tenderSource;

        return $this;
    }

    /**
     * Get tenderSource.
     *
     * @return string|null
     */
    public function getTenderSource()
    {
        return $this->tenderSource;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * Set isPublished.
     *
     * @param bool|null $isPublished
     *
     * @return Request
     */
    public function setIsPublished($isPublished = null)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished.
     *
     * @return bool|null
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set clicks.
     *
     * @param int|null $clicks
     *
     * @return Request
     */
    public function setClicks($clicks = null)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks.
     *
     * @return int|null
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Add document.
     *
     * @param \AppBundle\Entity\RequestDocument $document
     *
     * @return Request
     */
    public function addDocument(\AppBundle\Entity\RequestDocument $document)
    {
      $this->documents[] = $document;
      $document->setRequest($this);
      return $this;
    }

    /**
     * Remove document.
     *
     * @param \AppBundle\Entity\RequestDocument $document
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDocument(\AppBundle\Entity\RequestDocument $document)
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
     * Set requestType.
     *
     * @param \AppBundle\Entity\RequestType|null $requestType
     *
     * @return Request
     */
    public function setRequestType(\AppBundle\Entity\RequestType $requestType = null)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Get requestType.
     *
     * @return \AppBundle\Entity\RequestType|null
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Set buyer.
     *
     * @param \AppBundle\Entity\Buyer|null $buyer
     *
     * @return Request
     */
    public function setBuyer(\AppBundle\Entity\Buyer $buyer = null)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Get buyer.
     *
     * @return \AppBundle\Entity\Buyer|null
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Add tag.
     *
     * @param \AppBundle\Entity\Category $tag
     *
     * @return Request
     */
    public function addTag(\AppBundle\Entity\Category $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag.
     *
     * @param \AppBundle\Entity\Category $tag
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTag(\AppBundle\Entity\Category $tag)
    {
        return $this->tags->removeElement($tag);
    }

    /**
     * Get tags.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
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
     $this->setSlug(Utils::slugify($this->name).'-'.rand(3,9));
    }

    /**
     * @ORM\PrePersist
     */
    public function setDocumentId()
    {
      if (null == $this->id) {
        $digits = 9;
        $this->id = rand(pow(10, $digits-1), pow(10, $digits)-1);
      }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdateAtValue()
    {
      $this->updatedAt = new \DateTime();
      $this->setSlug(Utils::slugify($this->name));
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $responses;


    /**
     * Add response.
     *
     * @param \AppBundle\Entity\CompanyRequest $response
     *
     * @return Request
     */
    public function addResponse(\AppBundle\Entity\CompanyRequest $response)
    {
        $this->responses[] = $response;

        return $this;
    }

    /**
     * Remove response.
     *
     * @param \AppBundle\Entity\CompanyRequest $response
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeResponse(\AppBundle\Entity\CompanyRequest $response)
    {
        return $this->responses->removeElement($response);
    }

    /**
     * Get responses.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResponses()
    {
        return $this->responses;
    }

    public function __toString()
   {
     return $this->getName() == null ? 'New' : $this->getName();
   }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $updates;


    /**
     * Add update.
     *
     * @param \AppBundle\Entity\RequestUpdate $update
     *
     * @return Request
     */
    public function addUpdate(\AppBundle\Entity\RequestUpdate $update)
    {
        $this->updates[] = $update;

        return $this;
    }

    /**
     * Remove update.
     *
     * @param \AppBundle\Entity\RequestUpdate $update
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeUpdate(\AppBundle\Entity\RequestUpdate $update)
    {
        return $this->updates->removeElement($update);
    }

    /**
     * Get updates.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUpdates()
    {
        return $this->updates;
    }
    /**
     * @var bool|null
     */
    private $isPublic = false;


    /**
     * Set isPublic.
     *
     * @param bool|null $isPublic
     *
     * @return Request
     */
    public function setIsPublic($isPublic = null)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get isPublic.
     *
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stats;


    /**
     * Add stat.
     *
     * @param \AppBundle\Entity\RequestStat $stat
     *
     * @return Request
     */
    public function addStat(\AppBundle\Entity\RequestStat $stat)
    {
        $this->stats[] = $stat;

        return $this;
    }

    /**
     * Remove stat.
     *
     * @param \AppBundle\Entity\RequestStat $stat
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeStat(\AppBundle\Entity\RequestStat $stat)
    {
        return $this->stats->removeElement($stat);
    }

    /**
     * Get stats.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStats()
    {
        return $this->stats;
    }
    /**
     * @var string
     */
    private $status;


    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Request
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
     * @var string|null
     */
    private $submissionInstructions;


    /**
     * Set submissionInstructions.
     *
     * @param string|null $submissionInstructions
     *
     * @return Request
     */
    public function setSubmissionInstructions($submissionInstructions = null)
    {
        $this->submissionInstructions = $submissionInstructions;

        return $this;
    }

    /**
     * Get submissionInstructions.
     *
     * @return string|null
     */
    public function getSubmissionInstructions()
    {
        return $this->submissionInstructions;
    }
    /**
     * @var string
     */
    private $importData;


    /**
     * Set importData.
     *
     * @param string $importData
     *
     * @return Request
     */
    public function setImportData($importData)
    {
        $this->importData = $importData;

        return $this;
    }

    /**
     * Get importData.
     *
     * @return string
     */
    public function getImportData()
    {
        return $this->importData;
    }
}
