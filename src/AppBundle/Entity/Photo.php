<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 */
class Photo
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
    private $caption;

    /**
     * @var string
     */
    private $original_name;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \AppBundle\Entity\Article
     */
    private $article;

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
     * Set name
     *
     * @param string $name
     *
     * @return Photo
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
     * Set caption
     *
     * @param string $caption
     *
     * @return Photo
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set originalName
     *
     * @param string $originalName
     *
     * @return Photo
     */
    public function setOriginalName($originalName)
    {
        $this->original_name = $originalName;

        return $this;
    }

    /**
     * Get originalName
     *
     * @return string
     */
    public function getOriginalName()
    {
        return $this->original_name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Photo
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Photo
     */
    public function setArticle(\AppBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \AppBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
      if($this->created_at == null)
      {
         $this->created_at = new \DateTime();
      }
    }

    public function getAbsolutePath()
   {
       return null === $this->name
           ? null
           : $this->getUploadRootDir().'/'.$this->name;
   }

   public function getWebPath()
   {
       return null === $this->name
           ? null
           : $this->getUploadDir().'/'.$this->name;
   }

   protected function getUploadRootDir()
   {
       // the absolute directory path where uploaded
       // pics should be saved
       return __DIR__.'/../../../'.$this->getUploadDir();
   }

   protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/images/articles';
    }

    public function getFile()
    {
        return $this->file;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preUpload()
    {
      if (null !== $this->getFile()) {
          // do whatever you want to generate a unique name
          $filename = sha1(uniqid(mt_rand(), true));
          $this->name = $filename.'.'.$this->getFile()->getClientOriginalExtension();
          $this->original_name = $this->getClientOriginalName().'.'.$this->getFile()->getClientOriginalExtension();
      }
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
      if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->name);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
      $file = $this->getAbsolutePath();
      if ($file) {
          unlink($file);
      }
    }
}
