<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \AppBundle\Entity\Category implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'companies', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'children', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'parent', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'requests', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'slug', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'companies', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'children', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'parent', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'requests', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'slug', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\Category' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Category $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function addCompany(\AppBundle\Entity\Company $company)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCompany', [$company]);

        return parent::addCompany($company);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCompany(\AppBundle\Entity\Company $company)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCompany', [$company]);

        return parent::removeCompany($company);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanies', []);

        return parent::getCompanies();
    }

    /**
     * {@inheritDoc}
     */
    public function addChild(\AppBundle\Entity\Category $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChild', [$child]);

        return parent::addChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChild(\AppBundle\Entity\Category $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChild', [$child]);

        return parent::removeChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\AppBundle\Entity\Category $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function addRequest(\AppBundle\Entity\Company $request)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRequest', [$request]);

        return parent::addRequest($request);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRequest(\AppBundle\Entity\Company $request)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRequest', [$request]);

        return parent::removeRequest($request);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequests()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequests', []);

        return parent::getRequests();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlugValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlugValue', []);

        return parent::setSlugValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAtValue', []);

        return parent::setCreatedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateAtValue', []);

        return parent::setUpdateAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
