<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SourceDoggSSO extends \AppBundle\Entity\SourceDoggSSO implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'dhot', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'cookie', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'member'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'dhot', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'cookie', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\SourceDoggSSO' . "\0" . 'member'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SourceDoggSSO $proxy) {
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
    public function setDhot($dhot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDhot', [$dhot]);

        return parent::setDhot($dhot);
    }

    /**
     * {@inheritDoc}
     */
    public function getDhot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDhot', []);

        return parent::getDhot();
    }

    /**
     * {@inheritDoc}
     */
    public function setCookie($cookie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCookie', [$cookie]);

        return parent::setCookie($cookie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCookie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCookie', []);

        return parent::getCookie();
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
    public function setUpdatedAt($updatedAt = NULL)
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
    public function setMember(\AppBundle\Entity\Member $member = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMember', [$member]);

        return parent::setMember($member);
    }

    /**
     * {@inheritDoc}
     */
    public function getMember()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMember', []);

        return parent::getMember();
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
    public function setUpdatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAtValue', []);

        return parent::setUpdatedAtValue();
    }

}
