<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Member extends \AppBundle\Entity\Member implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'firstName', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'middleName', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'surname', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'gender', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'mobile', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'dateOfBirth', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'user', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'isPaidUp', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'registeredCompanies', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'dhot', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'hiveBriteId', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'sdsso', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'activities', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'tel', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'membership', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'azureId', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'buyerMembership'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'firstName', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'middleName', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'surname', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'gender', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'mobile', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'dateOfBirth', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'user', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'isPaidUp', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'registeredCompanies', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'dhot', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'hiveBriteId', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'sdsso', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'activities', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'tel', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'membership', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'azureId', '' . "\0" . 'AppBundle\\Entity\\Member' . "\0" . 'buyerMembership'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Member $proxy) {
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
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setMiddleName($middleName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMiddleName', [$middleName]);

        return parent::setMiddleName($middleName);
    }

    /**
     * {@inheritDoc}
     */
    public function getMiddleName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMiddleName', []);

        return parent::getMiddleName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurname($surname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurname', [$surname]);

        return parent::setSurname($surname);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurname', []);

        return parent::getSurname();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobile($mobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobile', [$mobile]);

        return parent::setMobile($mobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobile', []);

        return parent::getMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateOfBirth($dateOfBirth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateOfBirth', [$dateOfBirth]);

        return parent::setDateOfBirth($dateOfBirth);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateOfBirth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateOfBirth', []);

        return parent::getDateOfBirth();
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
    public function getCompanies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanies', []);

        return parent::getCompanies();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
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

    /**
     * {@inheritDoc}
     */
    public function setIsPaidUp($isPaidUp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPaidUp', [$isPaidUp]);

        return parent::setIsPaidUp($isPaidUp);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPaidUp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPaidUp', []);

        return parent::getIsPaidUp();
    }

    /**
     * {@inheritDoc}
     */
    public function addRegisteredCompany(\AppBundle\Entity\Company $registeredCompany)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRegisteredCompany', [$registeredCompany]);

        return parent::addRegisteredCompany($registeredCompany);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRegisteredCompany(\AppBundle\Entity\Company $registeredCompany)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRegisteredCompany', [$registeredCompany]);

        return parent::removeRegisteredCompany($registeredCompany);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegisteredCompanies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegisteredCompanies', []);

        return parent::getRegisteredCompanies();
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
    public function setHiveBriteId($hiveBriteId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHiveBriteId', [$hiveBriteId]);

        return parent::setHiveBriteId($hiveBriteId);
    }

    /**
     * {@inheritDoc}
     */
    public function getHiveBriteId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHiveBriteId', []);

        return parent::getHiveBriteId();
    }

    /**
     * {@inheritDoc}
     */
    public function hasPaidUpCompany()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPaidUpCompany', []);

        return parent::hasPaidUpCompany();
    }

    /**
     * {@inheritDoc}
     */
    public function setSdsso(\AppBundle\Entity\SourceDoggSSO $sdsso = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSdsso', [$sdsso]);

        return parent::setSdsso($sdsso);
    }

    /**
     * {@inheritDoc}
     */
    public function getSdsso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSdsso', []);

        return parent::getSdsso();
    }

    /**
     * {@inheritDoc}
     */
    public function companiesAsString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'companiesAsString', []);

        return parent::companiesAsString();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addActivity(\AppBundle\Entity\UserActivity $activity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addActivity', [$activity]);

        return parent::addActivity($activity);
    }

    /**
     * {@inheritDoc}
     */
    public function removeActivity(\AppBundle\Entity\UserActivity $activity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeActivity', [$activity]);

        return parent::removeActivity($activity);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivities', []);

        return parent::getActivities();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$tel]);

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function addMembership(\AppBundle\Entity\CompanyMembership $membership)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMembership', [$membership]);

        return parent::addMembership($membership);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMembership(\AppBundle\Entity\CompanyMembership $membership)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMembership', [$membership]);

        return parent::removeMembership($membership);
    }

    /**
     * {@inheritDoc}
     */
    public function getMembership()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMembership', []);

        return parent::getMembership();
    }

    /**
     * {@inheritDoc}
     */
    public function setAzureId($azureId = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAzureId', [$azureId]);

        return parent::setAzureId($azureId);
    }

    /**
     * {@inheritDoc}
     */
    public function getAzureId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAzureId', []);

        return parent::getAzureId();
    }

    /**
     * {@inheritDoc}
     */
    public function addBuyerMembership(\AppBundle\Entity\BuyerMembership $buyerMembership)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBuyerMembership', [$buyerMembership]);

        return parent::addBuyerMembership($buyerMembership);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBuyerMembership(\AppBundle\Entity\BuyerMembership $buyerMembership)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBuyerMembership', [$buyerMembership]);

        return parent::removeBuyerMembership($buyerMembership);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyerMembership()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyerMembership', []);

        return parent::getBuyerMembership();
    }

}
