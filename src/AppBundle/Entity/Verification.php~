<?php

namespace AppBundle\Entity;

/**
 * Verification
 */
class Verification
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
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $steps;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->steps = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Verification
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
     * Set description
     *
     * @param string $description
     *
     * @return Verification
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
     * Add step
     *
     * @param \AppBundle\Entity\VerificationStep $step
     *
     * @return Verification
     */
    public function addStep(\AppBundle\Entity\VerificationStep $step)
    {
        $this->steps[] = $step;
        $step->setStage($this);
        return $this;
    }

    /**
     * Remove step
     *
     * @param \AppBundle\Entity\VerificationStep $step
     */
    public function removeStep(\AppBundle\Entity\VerificationStep $step)
    {
        $this->steps->removeElement($step);
    }

    /**
     * Get steps
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSteps()
    {
        return $this->steps;
    }

    public function __toString()
    {
      return $this->getName() == null ? 'New' : $this->getName();
    }
}
