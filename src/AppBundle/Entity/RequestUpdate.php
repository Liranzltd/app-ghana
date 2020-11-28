<?php

namespace AppBundle\Entity;

/**
 * RequestUpdate
 */
class RequestUpdate
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var \DateTime
     */
    private $actionDate;

    /**
     * @var \AppBundle\Entity\Request
     */
    private $request;

    /**
     * @var \AppBundle\Entity\BuyerMembership
     */
    private $member;


    /**
     * Set id.
     *
     * @param int $id
     *
     * @return RequestUpdate
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
     * Set status.
     *
     * @param string $status
     *
     * @return RequestUpdate
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set remarks.
     *
     * @param string $remarks
     *
     * @return RequestUpdate
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks.
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Set actionDate.
     *
     * @param \DateTime $actionDate
     *
     * @return RequestUpdate
     */
    public function setActionDate($actionDate)
    {
        $this->actionDate = $actionDate;

        return $this;
    }

    /**
     * Get actionDate.
     *
     * @return \DateTime
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * Set request.
     *
     * @param \AppBundle\Entity\Request|null $request
     *
     * @return RequestUpdate
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
     * Set member.
     *
     * @param \AppBundle\Entity\BuyerMembership|null $member
     *
     * @return RequestUpdate
     */
    public function setMember(\AppBundle\Entity\BuyerMembership $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member.
     *
     * @return \AppBundle\Entity\BuyerMembership|null
     */
    public function getMember()
    {
        return $this->member;
    }
}
