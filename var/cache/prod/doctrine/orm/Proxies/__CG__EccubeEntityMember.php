<?php

namespace Proxies\__CG__\Eccube\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Member extends \Eccube\Entity\Member implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'name', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'department', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'login_id', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'password', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'salt', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'sort_no', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'login_date', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'Work', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'Authority', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'Creator'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'name', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'department', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'login_id', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'password', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'salt', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'sort_no', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'login_date', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'Work', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'Authority', '' . "\0" . 'Eccube\\Entity\\Member' . "\0" . 'Creator'];
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
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
    public function setName($name = NULL)
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
    public function setDepartment($department = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartment', [$department]);

        return parent::setDepartment($department);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartment', []);

        return parent::getDepartment();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginId($loginId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginId', [$loginId]);

        return parent::setLoginId($loginId);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginId', []);

        return parent::getLoginId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', [$salt]);

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setSortNo($sortNo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSortNo', [$sortNo]);

        return parent::setSortNo($sortNo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSortNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSortNo', []);

        return parent::getSortNo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$createDate]);

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginDate($loginDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginDate', [$loginDate]);

        return parent::setLoginDate($loginDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginDate', []);

        return parent::getLoginDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setWork(\Eccube\Entity\Master\Work $work = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWork', [$work]);

        return parent::setWork($work);
    }

    /**
     * {@inheritDoc}
     */
    public function getWork()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWork', []);

        return parent::getWork();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthority(\Eccube\Entity\Master\Authority $authority = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthority', [$authority]);

        return parent::setAuthority($authority);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthority()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthority', []);

        return parent::getAuthority();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Eccube\Entity\Member $creator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnotationReader(\Doctrine\Common\Annotations\Reader $Reader)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnotationReader', [$Reader]);

        return parent::setAnnotationReader($Reader);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnotationReader()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnotationReader', []);

        return parent::getAnnotationReader();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

}
