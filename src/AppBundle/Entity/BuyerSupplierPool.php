<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * BuyerSupplierPool
 */
class BuyerSupplierPool
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
     * @var \AppBundle\Entity\Buyer
     */
    private $buyer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $suppliers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->suppliers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return BuyerSupplierPool
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
     * Set buyer.
     *
     * @param \AppBundle\Entity\Buyer|null $buyer
     *
     * @return BuyerSupplierPool
     */
    public function setBuyer(\AppBundle\Entity\Buyer $buyer = null)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Get buyer.
     *
     * @return \AppBundle\Entity\Buyer|null
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Add supplier.
     *
     * @param \AppBundle\Entity\Company $supplier
     *
     * @return BuyerSupplierPool
     */
    public function addSupplier(\AppBundle\Entity\Company $supplier)
    {
        $this->suppliers[] = $supplier;

        return $this;
    }

    /**
     * Remove supplier.
     *
     * @param \AppBundle\Entity\Company $supplier
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSupplier(\AppBundle\Entity\Company $supplier)
    {
        return $this->suppliers->removeElement($supplier);
    }

    /**
     * Get suppliers.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSuppliers()
    {
        return $this->suppliers;
    }
}
