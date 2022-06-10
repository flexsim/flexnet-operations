<?php

namespace Flexsim\FlexnetOperations\Type;

class RepairFulfillmentDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    protected $fulfillmentIdentifier;

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
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param bool $overridePolicy
     * @param string $FNPTimeZoneValue
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, bool $overridePolicy = null, string $FNPTimeZoneValue = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param bool $overridePolicy
     * @param string $FNPTimeZoneValue
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, bool $overridePolicy = null, string $FNPTimeZoneValue = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier()
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return $this
     */
    public function setFulfillmentIdentifier($fulfillmentIdentifier)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;

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
