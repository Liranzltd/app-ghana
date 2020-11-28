<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * RequestType
 */
class RequestType
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $requests;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * @return RequestType
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
     * Add request.
     *
     * @param \AppBundle\Entity\Request $request
     *
     * @return RequestType
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

    public function __toString()
    {
      return $this->getName() == null ? 'New' :  $this->getName();
    }
}
