<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Utils;

/**
 * BusinessGrowthHub
 */
class BusinessGrowthHub
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var string
     */
    private $contentType;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $author;

    private $file;

    /**
     * @var boolean
     */
    private $isPublished = false;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var integer
     */
    private $clicks;

    /**
     * @var string
     */
    private $externalLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     *
     * @return BusinessGrowthHub
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return BusinessGrowthHub
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set contentType
     *
     * @param string $contentType
     *
     * @return BusinessGrowthHub
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return BusinessGrowthHub
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return BusinessGrowthHub
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set isPublished
     *
     * @param boolean $isPublished
     *
     * @return BusinessGrowthHub
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return boolean
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return BusinessGrowthHub
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return BusinessGrowthHub
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
     * @return BusinessGrowthHub
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
     * Set clicks
     *
     * @param integer $clicks
     *
     * @return BusinessGrowthHub
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks
     *
     * @return integer
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set externalLink
     *
     * @param string $externalLink
     *
     * @return BusinessGrowthHub
     */
    public function setExternalLink($externalLink)
    {
        $this->externalLink = $externalLink;

        return $this;
    }

    /**
     * Get externalLink
     *
     * @return string
     */
    public function getExternalLink()
    {
        return $this->externalLink;
    }

    /**
     * Add category
     *
     * @param \AppBundle\Entity\ContentCategory $category
     *
     * @return BusinessGrowthHub
     */
    public function addCategory(\AppBundle\Entity\ContentCategory $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\ContentCategory $category
     */
    public function removeCategory(\AppBundle\Entity\ContentCategory $category)
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

        // move takes the target directory and target filename as params
        $this->getFile()->move(
            $_SERVER['DOCUMENT_ROOT'].'/web/uploads/growthub',$this->getFile()->getClientOriginalName());

        // set the path property to the filename where you've saved the file
        $this->filename = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->setFile(null);
    }

    /**
     * Lifecycle callback to upload the file to the server
     */
    public function lifecycleFileUpload()
    {
        $this->upload();
    }

    /**
     * Updates the hash value to force the preUpdate and postUpdate events to fire
     */
    public function refreshUpdated()
    {
      $this->setUpdatedAt(new \DateTime());
    }

    public function updateSlug()
    {
      $this->setSlug(Utils::slugify($this->title));
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
      return $this->getTitle() == '' ? 'New' : $this->getTitle();
    }
    /**
     * @var boolean
     */
    private $isPremiumContent = false;


    /**
     * Set isPremiumContent
     *
     * @param boolean $isPremiumContent
     *
     * @return BusinessGrowthHub
     */
    public function setIsPremiumContent($isPremiumContent)
    {
        $this->isPremiumContent = $isPremiumContent;

        return $this;
    }

    /**
     * Get isPremiumContent
     *
     * @return boolean
     */
    public function getIsPremiumContent()
    {
        return $this->isPremiumContent;
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
     * @return BusinessGrowthHub
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
     * @var \AppBundle\Entity\Buyer
     */
    private $buyer;


    /**
     * Set buyer.
     *
     * @param \AppBundle\Entity\Buyer|null $buyer
     *
     * @return BusinessGrowthHub
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
}
