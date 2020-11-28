<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Utils;
/**
 * SpecialGroup
 */
class SpecialGroup
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
    private $slug;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \AppBundle\Entity\SpecialGroup
     */
    private $parent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $companies;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $requests;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->companies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->requests = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SpecialGroup
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
     * Set slug.
     *
     * @param string|null $slug
     *
     * @return SpecialGroup
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
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return SpecialGroup
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
     * @return SpecialGroup
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
     * Add child.
     *
     * @param \AppBundle\Entity\SpecialGroup $child
     *
     * @return SpecialGroup
     */
    public function addChild(\AppBundle\Entity\SpecialGroup $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child.
     *
     * @param \AppBundle\Entity\SpecialGroup $child
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeChild(\AppBundle\Entity\SpecialGroup $child)
    {
        return $this->children->removeElement($child);
    }

    /**
     * Get children.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent.
     *
     * @param \AppBundle\Entity\SpecialGroup|null $parent
     *
     * @return SpecialGroup
     */
    public function setParent(\AppBundle\Entity\SpecialGroup $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent.
     *
     * @return \AppBundle\Entity\SpecialGroup|null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add company.
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return SpecialGroup
     */
    public function addCompany(\AppBundle\Entity\Company $company)
    {
        $this->companies[] = $company;

        return $this;
    }

    /**
     * Remove company.
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCompany(\AppBundle\Entity\Company $company)
    {
        return $this->companies->removeElement($company);
    }

    /**
     * Get companies.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * Add request.
     *
     * @param \AppBundle\Entity\Request $request
     *
     * @return SpecialGroup
     */
    public function addRequest(\AppBundle\Entity\Request $request)
    {
        $this->requests[] = $request;

        return $this;
    }

    /**
     * Remove request.
     *
     * @param \AppBundle\Entity\Request $request
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRequest(\AppBundle\Entity\Request $request)
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
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setSlugValue()
    {
        $this->setSlug(Utils::slugify($this->name));
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
    public function setUpdateAtValue()
    {
      $this->updatedAt = new \DateTime();
    }
}
