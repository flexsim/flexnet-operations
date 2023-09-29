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
     */
    public function __construct(string $webRegkey, string $shortCode, string $bulkEntitlementId = null, PublisherAttributesListDataType $publisherAttributes = null, bool $overridePolicy = null, string $shortCodeActivationType = null, FulfillmentIdentifierType $reinstallFulfillment = null)
    {
        $this->webRegkey = $webRegkey;
        $this->shortCode = $shortCode;
        $this->bulkEntitlementId = $bulkEntitlementId;
        $this->publisherAttributes = $publisherAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->shortCodeActivationType = $shortCodeActivationType;
        $this->reinstallFulfillment = $reinstallFulfillment;
    }

    public static function create(string $webRegkey, string $shortCode, string $bulkEntitlementId = null, PublisherAttributesListDataType $publisherAttributes = null, bool $overridePolicy = null, string $shortCodeActivationType = null, FulfillmentIdentifierType $reinstallFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementId(): ?string
    {
        return $this->bulkEntitlementId;
    }

    public function withBulkEntitlementId(?string $bulkEntitlementId): CreateShortCodeDataType
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

    public function getPublisherAttributes(): ?PublisherAttributesListDataType
    {
        return $this->publisherAttributes;
    }

    public function withPublisherAttributes(?PublisherAttributesListDataType $publisherAttributes): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->publisherAttributes = $publisherAttributes;

        return $new;
    }

    public function getOverridePolicy(): ?bool
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(?bool $overridePolicy): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getShortCodeActivationType(): ?string
    {
        return $this->shortCodeActivationType;
    }

    public function withShortCodeActivationType(?string $shortCodeActivationType): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeActivationType = $shortCodeActivationType;

        return $new;
    }

    public function getReinstallFulfillment(): ?FulfillmentIdentifierType
    {
        return $this->reinstallFulfillment;
    }

    public function withReinstallFulfillment(?FulfillmentIdentifierType $reinstallFulfillment): CreateShortCodeDataType
    {
        $new = clone $this;
        $new->reinstallFulfillment = $reinstallFulfillment;

        return $new;
    }
}
