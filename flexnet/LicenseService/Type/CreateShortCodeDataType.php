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
     * @param  \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null  $publisherAttributes
     * @param  bool|null  $overridePolicy
     * @param  string|null  $shortCodeActivationType
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null  $reinstallFulfillment
     */
    public function __construct(string $webRegkey, string $shortCode, string|null $bulkEntitlementId = null, PublisherAttributesListDataType|null $publisherAttributes = null, bool|null $overridePolicy = null, string|null $shortCodeActivationType = null, FulfillmentIdentifierType|null $reinstallFulfillment = null)
    {
        $this->webRegkey = $webRegkey;
        $this->shortCode = $shortCode;
        $this->bulkEntitlementId = $bulkEntitlementId;
        $this->publisherAttributes = $publisherAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->shortCodeActivationType = $shortCodeActivationType;
        $this->reinstallFulfillment = $reinstallFulfillment;
    }

    /**
     * @param  string|null  $bulkEntitlementId
     * @param  \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null  $publisherAttributes
     * @param  bool|null  $overridePolicy
     * @param  string|null  $shortCodeActivationType
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null  $reinstallFulfillment
     */
    public static function create(string $webRegkey, string $shortCode, string|null $bulkEntitlementId = null, PublisherAttributesListDataType|null $publisherAttributes = null, bool|null $overridePolicy = null, string|null $shortCodeActivationType = null, FulfillmentIdentifierType|null $reinstallFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementId(): string|null
    {
        return $this->bulkEntitlementId;
    }

    public function withBulkEntitlementId(string|null $bulkEntitlementId): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->bulkEntitlementId = $bulkEntitlementId;

        return $new;
    }

    public function getWebRegkey(): string
    {
        return $this->webRegkey;
    }

    public function withWebRegkey(string $webRegkey): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->webRegkey = $webRegkey;

        return $new;
    }

    public function getShortCode(): string
    {
        return $this->shortCode;
    }

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
     */
    public function withPublisherAttributes(PublisherAttributesListDataType|null $publisherAttributes): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->publisherAttributes = $publisherAttributes;

        return $new;
    }

    public function getOverridePolicy(): bool|null
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(bool|null $overridePolicy): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getShortCodeActivationType(): string|null
    {
        return $this->shortCodeActivationType;
    }

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
     */
    public function withReinstallFulfillment(FulfillmentIdentifierType|null $reinstallFulfillment): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->reinstallFulfillment = $reinstallFulfillment;

        return $new;
    }
}
