<?php

namespace Flexsim\FlexnetOperations\Type;

class GeneratePrebuiltLicenseDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $deviceIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $product;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    protected $licenseModel;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $licenseModelAttributes;

    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var bool
     */
    protected $isPermanent;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DurationType
     */
    protected $term;

    /**
     * @var \DateTimeInterface
     */
    protected $expirationDate;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @var \DateTimeInterface $startDate
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DurationType $term
     * @var \DateTimeInterface $expirationDate
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, \DateTimeInterface $startDate = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DurationType $term = null, \DateTimeInterface $expirationDate = null)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        $this->product = $product;
        $this->licenseModel = $licenseModel;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->term = $term;
        $this->expirationDate = $expirationDate;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @var \DateTimeInterface $startDate
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DurationType $term
     * @var \DateTimeInterface $expirationDate
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, \DateTimeInterface $startDate = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DurationType $term = null, \DateTimeInterface $expirationDate = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getLicenseModelAttributes()
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @return $this
     */
    public function setLicenseModelAttributes($licenseModelAttributes)
    {
        $this->licenseModelAttributes = $licenseModelAttributes;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPermanent()
    {
        return $this->isPermanent;
    }

    /**
     * @param bool $isPermanent
     * @return $this
     */
    public function setIsPermanent($isPermanent)
    {
        $this->isPermanent = $isPermanent;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DurationType
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DurationType $term
     * @return $this
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTimeInterface $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }
}
