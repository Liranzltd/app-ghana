<?php

namespace AppBundle\Entity;

/**
 * RenewalReminder
 */
class RenewalReminder
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $modeOfReminder;

    /**
     * @var \DateTime
     */
    private $timeSent;

    /**
     * @var \AppBundle\Entity\CompanySubscription
     */
    private $subscription;


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
     * Set modeOfReminder
     *
     * @param string $modeOfReminder
     *
     * @return RenewalReminder
     */
    public function setModeOfReminder($modeOfReminder)
    {
        $this->modeOfReminder = $modeOfReminder;

        return $this;
    }

    /**
     * Get modeOfReminder
     *
     * @return string
     */
    public function getModeOfReminder()
    {
        return $this->modeOfReminder;
    }

    /**
     * Set timeSent
     *
     * @param \DateTime $timeSent
     *
     * @return RenewalReminder
     */
    public function setTimeSent($timeSent)
    {
        $this->timeSent = $timeSent;

        return $this;
    }

    /**
     * Get timeSent
     *
     * @return \DateTime
     */
    public function getTimeSent()
    {
        return $this->timeSent;
    }

    /**
     * Set subscription
     *
     * @param \AppBundle\Entity\CompanySubscription $subscription
     *
     * @return RenewalReminder
     */
    public function setSubscription(\AppBundle\Entity\CompanySubscription $subscription = null)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * Get subscription
     *
     * @return \AppBundle\Entity\CompanySubscription
     */
    public function getSubscription()
    {
        return $this->subscription;
    }
}
