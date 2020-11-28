<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Utils;

/**
 * ContentCategory
 */
class ContentCategory
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
    private $slug;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \AppBundle\Entity\ContentCategory
     */
    private $parent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ujuzihub;

    public $file;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ujuzihub = new \Doctrine\Common\Collections\ArrayCollection();
        $this->growthub = new ArrayCollection();
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
     * @return ContentCategory
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
     * Set slug
     *
     * @param string $slug
     *
     * @return ContentCategory
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ContentCategory
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
     * @return ContentCategory
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
     * Add child
     *
     * @param \AppBundle\Entity\ContentCategory $child
     *
     * @return ContentCategory
     */
    public function addChild(\AppBundle\Entity\ContentCategory $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \AppBundle\Entity\ContentCategory $child
     */
    public function removeChild(\AppBundle\Entity\ContentCategory $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \AppBundle\Entity\ContentCategory $parent
     *
     * @return ContentCategory
     */
    public function setParent(\AppBundle\Entity\ContentCategory $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\ContentCategory
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return ContentCategory
     */
    public function addArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \AppBundle\Entity\Article $article
     */
    public function removeArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Add ujuzihub
     *
     * @param \AppBundle\Entity\UjuziHub $ujuzihub
     *
     * @return ContentCategory
     */
    public function addUjuzihub(\AppBundle\Entity\UjuziHub $ujuzihub)
    {
        $this->ujuzihub[] = $ujuzihub;

        return $this;
    }

    /**
     * Remove ujuzihub
     *
     * @param \AppBundle\Entity\UjuziHub $ujuzihub
     */
    public function removeUjuzihub(\AppBundle\Entity\UjuziHub $ujuzihub)
    {
        $this->ujuzihub->removeElement($ujuzihub);
    }

    /**
     * Get ujuzihub
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUjuzihub()
    {
        return $this->ujuzihub;
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
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setSlugValue()
    {
        $this->setSlug(Utils::slugify($this->name));
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdateAtValue()
    {
        $this->updatedAt = new \DateTime();
    }


    public function __toString()
    {
      return $this->getName() == null ? 'New' : $this->getName();
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
     * @return ContentCategory
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
    private $banner;


    /**
     * Set banner
     *
     * @param string $banner
     *
     * @return ContentCategory
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return string
     */
    public function getBanner()
    {
        return $this->banner;
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
        $this->getFile()->move($_SERVER['DOCUMENT_ROOT'].'/bundles/app/images/bgh/',$filename);

        // set the path property to the filename where you've saved the file
        $this->banner = $filename;

        // clean up the file property as you won't need it anymore
        $this->setFile(null);
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $growthub;


    /**
     * Add growthub
     *
     * @param \AppBundle\Entity\BusinessGrowthHub $growthub
     *
     * @return ContentCategory
     */
    public function addGrowthub(\AppBundle\Entity\BusinessGrowthHub $growthub)
    {
        $this->growthub[] = $growthub;

        return $this;
    }

    /**
     * Remove growthub
     *
     * @param \AppBundle\Entity\BusinessGrowthHub $growthub
     */
    public function removeGrowthub(\AppBundle\Entity\BusinessGrowthHub $growthub)
    {
        $this->growthub->removeElement($growthub);
    }

    /**
     * Get growthub
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrowthub()
    {
        return $this->growthub;
    }
}
