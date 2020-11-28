<?php

namespace AppBundle\Entity;

/**
 * VerificationStep
 */
class VerificationStep
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
     * @var string
     */
    private $checkType;

    /**
     * @var \AppBundle\Entity\Verification
     */
    private $stage;


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
     * @return VerificationStep
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
     * @return VerificationStep
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
     * Set checkType
     *
     * @param string $checkType
     *
     * @return VerificationStep
     */
    public function setCheckType($checkType)
    {
        $this->checkType = $checkType;

        return $this;
    }

    /**
     * Get checkType
     *
     * @return string
     */
    public function getCheckType()
    {
        return $this->checkType;
    }

    /**
     * Set stage
     *
     * @param \AppBundle\Entity\VerificationStage $stage
     *
     * @return VerificationStep
     */
    public function setStage(\AppBundle\Entity\VerificationStage $stage = null)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return \AppBundle\Entity\Verification
     */
    public function getStage()
    {
        return $this->stage;
    }

    public function __toString()
    {
      return $this->getName() == null ? 'New' : $this->getName();
    }
    /**
     * @var boolean
     */
    private $mandatory = false;


    /**
     * Set mandatory
     *
     * @param boolean $mandatory
     *
     * @return VerificationStep
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    /**
     * Get mandatory
     *
     * @return boolean
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }
}
