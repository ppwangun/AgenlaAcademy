<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Admission extends \Application\Entity\Admission implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'status', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'fileNumber', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'nom', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'prenom', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'dateAdmission', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'phoneNumber', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'feesPaid', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'entranceType', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'paymentDate', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'academicYear', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'classOfStudy', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'degree', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'prospectiveStudent'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'status', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'fileNumber', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'nom', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'prenom', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'dateAdmission', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'phoneNumber', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'feesPaid', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'entranceType', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'paymentDate', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'academicYear', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'classOfStudy', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'degree', '' . "\0" . 'Application\\Entity\\Admission' . "\0" . 'prospectiveStudent'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Admission $proxy) {
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
    public function __setInitializer(\Closure $initializer = null): void
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
    public function __setCloner(\Closure $cloner = null): void
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
    public function setFileNumber($fileNumber = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileNumber', [$fileNumber]);

        return parent::setFileNumber($fileNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileNumber', []);

        return parent::getFileNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdmission($dateAdmission = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdmission', [$dateAdmission]);

        return parent::setDateAdmission($dateAdmission);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdmission()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdmission', []);

        return parent::getDateAdmission();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNumber($phoneNumber = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNumber', [$phoneNumber]);

        return parent::setPhoneNumber($phoneNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', []);

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeesPaid($feesPaid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeesPaid', [$feesPaid]);

        return parent::setFeesPaid($feesPaid);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeesPaid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeesPaid', []);

        return parent::getFeesPaid();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntranceType($entranceType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntranceType', [$entranceType]);

        return parent::setEntranceType($entranceType);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntranceType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntranceType', []);

        return parent::getEntranceType();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaymentDate($paymentDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaymentDate', [$paymentDate]);

        return parent::setPaymentDate($paymentDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentDate', []);

        return parent::getPaymentDate();
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
    public function setClassOfStudy(\Application\Entity\ClassOfStudy $classOfStudy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassOfStudy', [$classOfStudy]);

        return parent::setClassOfStudy($classOfStudy);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassOfStudy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassOfStudy', []);

        return parent::getClassOfStudy();
    }

    /**
     * {@inheritDoc}
     */
    public function setDegree(\Application\Entity\Degree $degree = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDegree', [$degree]);

        return parent::setDegree($degree);
    }

    /**
     * {@inheritDoc}
     */
    public function getDegree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDegree', []);

        return parent::getDegree();
    }

    /**
     * {@inheritDoc}
     */
    public function setProspectiveStudent(\Application\Entity\ProspectiveStudent $prospectiveStudent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProspectiveStudent', [$prospectiveStudent]);

        return parent::setProspectiveStudent($prospectiveStudent);
    }

    /**
     * {@inheritDoc}
     */
    public function getProspectiveStudent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProspectiveStudent', []);

        return parent::getProspectiveStudent();
    }

}