<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateShortCodeDataType
{

    /**
     * @var string
     */
    private $bulkEntitlementId;

    /**
     * @var string
     */
    private $webRegkey;

    /**
     * @var string
     */
    private $shortCode;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType
     */
    private $publisherAttributes;

    /**
     * @var bool
     */
    private $overridePolicy;

    /**
     * @var string
     */
    private $shortCodeActivationType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    private $reinstallFulfillment;

    /**
     * Constructor
     *
     * @var string $bulkEntitlementId
     * @var string $webRegkey
     * @var string $shortCode
     * @var \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType $publisherAttributes
     * @var bool $overridePolicy
     * @var string $shortCodeActivationType
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $reinstallFulfillment
     */
    public function __construct(string $bulkEntitlementId = null, string $webRegkey, string $shortCode, \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType $publisherAttributes = null, bool $overridePolicy = null, string $shortCodeActivationType = null, \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $reinstallFulfillment = null)
    {
        $this->bulkEntitlementId = $bulkEntitlementId;
        $this->webRegkey = $webRegkey;
        $this->shortCode = $shortCode;
        $this->publisherAttributes = $publisherAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->shortCodeActivationType = $shortCodeActivationType;
        $this->reinstallFulfillment = $reinstallFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var string $bulkEntitlementId
     * @var string $webRegkey
     * @var string $shortCode
     * @var \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType $publisherAttributes
     * @var bool $overridePolicy
     * @var string $shortCodeActivationType
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $reinstallFulfillment
     */
    public static function create(string $bulkEntitlementId = null, string $webRegkey, string $shortCode, \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType $publisherAttributes = null, bool $overridePolicy = null, string $shortCodeActivationType = null, \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $reinstallFulfillment = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getBulkEntitlementId()
    {
        return $this->bulkEntitlementId;
    }

    /**
     * @param string $bulkEntitlementId
     * @return $this
     */
    public function setBulkEntitlementId($bulkEntitlementId)
    {
        $this->bulkEntitlementId = $bulkEntitlementId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebRegkey()
    {
        return $this->webRegkey;
    }

    /**
     * @param string $webRegkey
     * @return $this
     */
    public function setWebRegkey($webRegkey)
    {
        $this->webRegkey = $webRegkey;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortCode()
    {
        return $this->shortCode;
    }

    /**
     * @param string $shortCode
     * @return $this
     */
    public function setShortCode($shortCode)
    {
        $this->shortCode = $shortCode;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType
     */
    public function getPublisherAttributes()
    {
        return $this->publisherAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType $publisherAttributes
     * @return $this
     */
    public function setPublisherAttributes($publisherAttributes)
    {
        $this->publisherAttributes = $publisherAttributes;
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
    public function getShortCodeActivationType()
    {
        return $this->shortCodeActivationType;
    }

    /**
     * @param string $shortCodeActivationType
     * @return $this
     */
    public function setShortCodeActivationType($shortCodeActivationType)
    {
        $this->shortCodeActivationType = $shortCodeActivationType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    public function getReinstallFulfillment()
    {
        return $this->reinstallFulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $reinstallFulfillment
     * @return $this
     */
    public function setReinstallFulfillment($reinstallFulfillment)
    {
        $this->reinstallFulfillment = $reinstallFulfillment;
        return $this;
    }


}

