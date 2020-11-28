<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Utils;


/**
 * Testimonial
 */
class Testimonial
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $attribution;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $testimony;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var boolean
     */
    private $isPublished = false;

    /**
     * @var string
     */
    private $photo;

    public $file;


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
     * Set attribution
     *
     * @param string $attribution
     *
     * @return Testimonial
     */
    public function setAttribution($attribution)
    {
        $this->attribution = $attribution;

        return $this;
    }

    /**
     * Get attribution
     *
     * @return string
     */
    public function getAttribution()
    {
        return $this->attribution;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Testimonial
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set testimony
     *
     * @param string $testimony
     *
     * @return Testimonial
     */
    public function setTestimony($testimony)
    {
        $this->testimony = $testimony;

        return $this;
    }

    /**
     * Get testimony
     *
     * @return string
     */
    public function getTestimony()
    {
        return $this->testimony;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Testimonial
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
     * @return Testimonial
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
     * Set isPublished
     *
     * @param boolean $isPublished
     *
     * @return Testimonial
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
     * Set photo
     *
     * @param string $photo
     *
     * @return Testimonial
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
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
        $this->getFile()->move($_SERVER['DOCUMENT_ROOT'].'/uploads/testimonials/'.$this->getCompany(),$filename);

        // set the path property to the filename where you've saved the file
        $this->photo = $filename;

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
      return $this->getAttribution() == null ? 'New' : $this->getAttribution().' '.$this->getCompany();
    }
}
