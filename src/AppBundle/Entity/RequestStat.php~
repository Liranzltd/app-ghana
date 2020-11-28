<?php

namespace AppBundle\Entity;

/**
 * RequestStat
 */
class RequestStat
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $hits;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $browser;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var \AppBundle\Entity\Request
     */
    private $request;


    /**
     * Set id.
     *
     * @param int $id
     *
     * @return RequestStat
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
     * Set hits.
     *
     * @param int $hits
     *
     * @return RequestStat
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits.
     *
     * @return int
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return RequestStat
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
     * @return RequestStat
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
     * Set browser.
     *
     * @param string $browser
     *
     * @return RequestStat
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get browser.
     *
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set ip.
     *
     * @param string $ip
     *
     * @return RequestStat
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip.
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set request.
     *
     * @param \AppBundle\Entity\Request|null $request
     *
     * @return RequestStat
     */
    public function setRequest(\AppBundle\Entity\Request $request = null)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get request.
     *
     * @return \AppBundle\Entity\Request|null
     */
    public function getRequest()
    {
        return $this->request;
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
     public function setUpdatedAtValue()
     {
         $this->updatedAt = new \DateTime();
     }
    /**
     * @var string
     */
    private $country;


    /**
     * Set country.
     *
     * @param string $country
     *
     * @return RequestStat
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $location;


    /**
     * Set city.
     *
     * @param string|null $city
     *
     * @return RequestStat
     */
    public function setCity($city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set location.
     *
     * @param string|null $location
     *
     * @return RequestStat
     */
    public function setLocation($location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location.
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdateAtValue()
    {
        // Add your code here
    }
}
