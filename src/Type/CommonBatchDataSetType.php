<?php

namespace Flexsim\FlexnetOperations\Type;

class CommonBatchDataSetType extends FlexnetType
{
    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var \DateTimeInterface
     */
    protected $versionDate;

    /**
     * @var \DateTimeInterface
     */
    protected $versionStartDate;

    /**
     * @var string
     */
    protected $soldTo;

    /**
     * @var string
     */
    protected $shipToEmail;

    /**
     * @var string
     */
    protected $shipToAddress;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $licenseModelAttributes;

    /**
     * @var bool
     */
    protected $overridePolicy;

    /**
     * @var string
     */
    protected $FNPTimeZoneValue;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $versionDate
     * @param \DateTimeInterface $versionStartDate
     * @param string $soldTo
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param bool $overridePolicy
     * @param string $FNPTimeZoneValue
     */
    public function __construct(\DateTimeInterface $startDate = null, \DateTimeInterface $versionDate = null, \DateTimeInterface $versionStartDate = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, bool $overridePolicy = null, string $FNPTimeZoneValue = null)
    {
        $this->startDate = $startDate;
        $this->versionDate = $versionDate;
        $this->versionStartDate = $versionStartDate;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    /**
     * create a new instance of this class
     *
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $versionDate
     * @param \DateTimeInterface $versionStartDate
     * @param string $soldTo
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param bool $overridePolicy
     * @param string $FNPTimeZoneValue
     */
    public static function create(\DateTimeInterface $startDate = null, \DateTimeInterface $versionDate = null, \DateTimeInterface $versionStartDate = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, bool $overridePolicy = null, string $FNPTimeZoneValue = null)
    {
        return new self(...func_get_args());
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
     * @return \DateTimeInterface
     */
    public function getVersionDate()
    {
        return $this->versionDate;
    }

    /**
     * @param \DateTimeInterface $versionDate
     * @return $this
     */
    public function setVersionDate($versionDate)
    {
        $this->versionDate = $versionDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getVersionStartDate()
    {
        return $this->versionStartDate;
    }

    /**
     * @param \DateTimeInterface $versionStartDate
     * @return $this
     */
    public function setVersionStartDate($versionStartDate)
    {
        $this->versionStartDate = $versionStartDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipToEmail()
    {
        return $this->shipToEmail;
    }

    /**
     * @param string $shipToEmail
     * @return $this
     */
    public function setShipToEmail($shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param string $shipToAddress
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;

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
     * @return bool
     */
    public function getOverridePolicy()
    {
        return $this->overridePolicy;
    }

    /**
     * @param bool $overridePolicy
     * @return $this
     */
    public function setOverridePolicy($overridePolicy)
    {
        $this->overridePolicy = $overridePolicy;

        return $this;
    }

    /**
     * @return string
     */
    public function getFNPTimeZoneValue()
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param string $FNPTimeZoneValue
     * @return $this
     */
    public function setFNPTimeZoneValue($FNPTimeZoneValue)
    {
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $this;
    }
}
