<?php

namespace Flexnet\LicenseService\Type;

class CreateShortCodeDataType
{
    /**
     * @var string|null
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
     * @var \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null
     */
    private $publisherAttributes;

    /**
     * @var bool|null
     */
    private $overridePolicy;

    /**
     * @var string|null
     */
    private $shortCodeActivationType;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
     */
    private $reinstallFulfillment;

    /**
     * Constructor
     *
     * @param  string|null  $bulkEntitlementId
     * @param  string  $webRegkey
     * @param  string  $shortCode
     * @param  \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null  $publisherAttributes
     * @param  bool|null  $overridePolicy
     * @param  string|null  $shortCodeActivationType
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null  $reinstallFulfillment
     */
    public function __construct(string|null $bulkEntitlementId = null, string $webRegkey, string $shortCode, PublisherAttributesListDataType|null $publisherAttributes = null, bool|null $overridePolicy = null, string|null $shortCodeActivationType = null, FulfillmentIdentifierType|null $reinstallFulfillment = null)
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
     * @param  string|null  $bulkEntitlementId
     * @param  string  $webRegkey
     * @param  string  $shortCode
     * @param  \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null  $publisherAttributes
     * @param  bool|null  $overridePolicy
     * @param  string|null  $shortCodeActivationType
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null  $reinstallFulfillment
     */
    public static function create(string|null $bulkEntitlementId = null, string $webRegkey, string $shortCode, PublisherAttributesListDataType|null $publisherAttributes = null, bool|null $overridePolicy = null, string|null $shortCodeActivationType = null, FulfillmentIdentifierType|null $reinstallFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|null
     */
    public function getBulkEntitlementId(): string|null
    {
        return $this->bulkEntitlementId;
    }

    /**
     * @param  string|null  $bulkEntitlementId
     * @return CreateShortCodeDataType
     */
    public function withBulkEntitlementId(string|null $bulkEntitlementId): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->bulkEntitlementId = $bulkEntitlementId;

        return $new;
    }

    /**
     * @return string
     */
    public function getWebRegkey(): string
    {
        return $this->webRegkey;
    }

    /**
     * @param  string  $webRegkey
     * @return CreateShortCodeDataType
     */
    public function withWebRegkey(string $webRegkey): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->webRegkey = $webRegkey;

        return $new;
    }

    /**
     * @return string
     */
    public function getShortCode(): string
    {
        return $this->shortCode;
    }

    /**
     * @param  string  $shortCode
     * @return CreateShortCodeDataType
     */
    public function withShortCode(string $shortCode): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->shortCode = $shortCode;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null
     */
    public function getPublisherAttributes(): PublisherAttributesListDataType|null
    {
        return $this->publisherAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null  $publisherAttributes
     * @return CreateShortCodeDataType
     */
    public function withPublisherAttributes(PublisherAttributesListDataType|null $publisherAttributes): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->publisherAttributes = $publisherAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOverridePolicy(): bool|null
    {
        return $this->overridePolicy;
    }

    /**
     * @param  bool|null  $overridePolicy
     * @return CreateShortCodeDataType
     */
    public function withOverridePolicy(bool|null $overridePolicy): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShortCodeActivationType(): string|null
    {
        return $this->shortCodeActivationType;
    }

    /**
     * @param  string|null  $shortCodeActivationType
     * @return CreateShortCodeDataType
     */
    public function withShortCodeActivationType(string|null $shortCodeActivationType): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeActivationType = $shortCodeActivationType;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
     */
    public function getReinstallFulfillment(): FulfillmentIdentifierType|null
    {
        return $this->reinstallFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null  $reinstallFulfillment
     * @return CreateShortCodeDataType
     */
    public function withReinstallFulfillment(FulfillmentIdentifierType|null $reinstallFulfillment): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->reinstallFulfillment = $reinstallFulfillment;

        return $new;
    }
}
