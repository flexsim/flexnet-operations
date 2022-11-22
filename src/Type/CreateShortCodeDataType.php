<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateShortCodeDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $webRegkey;

    /**
     * @var string
     */
    protected $shortCode;

    /**
     * @var string
     */
    protected $bulkEntitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType
     */
    protected $publisherAttributes;

    /**
     * @var bool
     */
    protected $overridePolicy;

    /**
     * @var string
     */
    protected $shortCodeActivationType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    protected $reinstallFulfillment;

    /**
     * Constructor
     *
     * @param  string  $webRegkey
     * @param  string  $shortCode
     * @param  string  $bulkEntitlementId
     * @param  \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType  $publisherAttributes
     * @param  bool  $overridePolicy
     * @param  string  $shortCodeActivationType
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType  $reinstallFulfillment
     */
    public function __construct(
        string $webRegkey,
        string $shortCode,
        string $bulkEntitlementId = null,
        PublisherAttributesListDataType $publisherAttributes = null,
        bool $overridePolicy = null,
        string $shortCodeActivationType = null,
        FulfillmentIdentifierType $reinstallFulfillment = null
    ) {
        $this->webRegkey = $webRegkey;
        $this->shortCode = $shortCode;
        $this->bulkEntitlementId = $bulkEntitlementId;
        $this->publisherAttributes = $publisherAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->shortCodeActivationType = $shortCodeActivationType;
        $this->reinstallFulfillment = $reinstallFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $webRegkey
     * @param  string  $shortCode
     * @param  string  $bulkEntitlementId
     * @param  \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType  $publisherAttributes
     * @param  bool  $overridePolicy
     * @param  string  $shortCodeActivationType
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType  $reinstallFulfillment
     */
    public static function create(
        string $webRegkey,
        string $shortCode,
        string $bulkEntitlementId = null,
        PublisherAttributesListDataType $publisherAttributes = null,
        bool $overridePolicy = null,
        string $shortCodeActivationType = null,
        FulfillmentIdentifierType $reinstallFulfillment = null
    ) {
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
     * @param  string  $bulkEntitlementId
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
     * @param  string  $webRegkey
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
     * @param  string  $shortCode
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
     * @param  \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType  $publisherAttributes
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
     * @param  bool  $overridePolicy
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
     * @param  string  $shortCodeActivationType
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
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType  $reinstallFulfillment
     * @return $this
     */
    public function setReinstallFulfillment($reinstallFulfillment)
    {
        $this->reinstallFulfillment = $reinstallFulfillment;

        return $this;
    }
}
