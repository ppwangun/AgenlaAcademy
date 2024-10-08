<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Contract extends \Application\Entity\Contract implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'refNumber', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'status', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'volumeHrs', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'amount', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'cmHrs', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'tdHrs', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'tpHrs', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'academicYear', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'semester', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'subject', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'teacher', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'teachingUnit'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'refNumber', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'status', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'volumeHrs', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'amount', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'cmHrs', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'tdHrs', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'tpHrs', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'academicYear', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'semester', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'subject', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'teacher', '' . "\0" . 'Application\\Entity\\Contract' . "\0" . 'teachingUnit'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Contract $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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
    public function setRefNumber($refNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRefNumber', [$refNumber]);

        return parent::setRefNumber($refNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getRefNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRefNumber', []);

        return parent::getRefNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolumeHrs($volumeHrs = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolumeHrs', [$volumeHrs]);

        return parent::setVolumeHrs($volumeHrs);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolumeHrs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolumeHrs', []);

        return parent::getVolumeHrs();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmount($amount = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmount', [$amount]);

        return parent::setAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmount', []);

        return parent::getAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setCmHrs($cmHrs = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCmHrs', [$cmHrs]);

        return parent::setCmHrs($cmHrs);
    }

    /**
     * {@inheritDoc}
     */
    public function getCmHrs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCmHrs', []);

        return parent::getCmHrs();
    }

    /**
     * {@inheritDoc}
     */
    public function setTdHrs($tdHrs = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTdHrs', [$tdHrs]);

        return parent::setTdHrs($tdHrs);
    }

    /**
     * {@inheritDoc}
     */
    public function getTdHrs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTdHrs', []);

        return parent::getTdHrs();
    }

    /**
     * {@inheritDoc}
     */
    public function setTpHrs($tpHrs = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTpHrs', [$tpHrs]);

        return parent::setTpHrs($tpHrs);
    }

    /**
     * {@inheritDoc}
     */
    public function getTpHrs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTpHrs', []);

        return parent::getTpHrs();
    }

    /**
     * {@inheritDoc}
     */
    public function setAcademicYear(\Application\Entity\AcademicYear $academicYear = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcademicYear', [$academicYear]);

        return parent::setAcademicYear($academicYear);
    }

    /**
     * {@inheritDoc}
     */
    public function getAcademicYear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcademicYear', []);

        return parent::getAcademicYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setSemester(\Application\Entity\Semester $semester = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSemester', [$semester]);

        return parent::setSemester($semester);
    }

    /**
     * {@inheritDoc}
     */
    public function getSemester()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSemester', []);

        return parent::getSemester();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubject(\Application\Entity\Subject $subject = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubject', [$subject]);

        return parent::setSubject($subject);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubject', []);

        return parent::getSubject();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeacher(\Application\Entity\Teacher $teacher = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeacher', [$teacher]);

        return parent::setTeacher($teacher);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeacher()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeacher', []);

        return parent::getTeacher();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeachingUnit(\Application\Entity\TeachingUnit $teachingUnit = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeachingUnit', [$teachingUnit]);

        return parent::setTeachingUnit($teachingUnit);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeachingUnit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeachingUnit', []);

        return parent::getTeachingUnit();
    }

}
