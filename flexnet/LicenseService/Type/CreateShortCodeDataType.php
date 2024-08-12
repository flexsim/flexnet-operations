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
     * @var \Flexnet\LicenseService\Type\ShortCodeActivationType|null
     */
    private $shortCodeActivationType;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
     */
    private $reinstallFulfillment;

    /**
     * Constructor
     */
    public function __construct(string $webRegkey, string $shortCode, ?string $bulkEntitlementId = null, ?\Flexnet\LicenseService\Type\PublisherAttributesListDataType $publisherAttributes = null, ?bool $overridePolicy = null, ?\Flexnet\LicenseService\Type\ShortCodeActivationType $shortCodeActivationType = null, ?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $reinstallFulfillment = null)
    {
        $this->webRegkey = $webRegkey;
        $this->shortCode = $shortCode;
        $this->bulkEntitlementId = $bulkEntitlementId;
        $this->publisherAttributes = $publisherAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->shortCodeActivationType = $shortCodeActivationType;
        $this->reinstallFulfillment = $reinstallFulfillment;
    }

    public static function create(string $webRegkey, string $shortCode, ?string $bulkEntitlementId = null, ?\Flexnet\LicenseService\Type\PublisherAttributesListDataType $publisherAttributes = null, ?bool $overridePolicy = null, ?\Flexnet\LicenseService\Type\ShortCodeActivationType $shortCodeActivationType = null, ?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $reinstallFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementId(): ?string
    {
        return $this->bulkEntitlementId;
    }

    public function withBulkEntitlementId(?string $bulkEntitlementId): \Flexnet\LicenseService\Type\CreateShortCodeDataType
    {
        $new = clone $this;
        $new->bulkEntitlementId = $bulkEntitlementId;

        return $new;
    }

    public function getWebRegkey(): string
    {
        return $this->webRegkey;
    }

    public function withWebRegkey(string $webRegkey): \Flexnet\LicenseService\Type\CreateShortCodeDataType
    {
        $new = clone $this;
        $new->webRegkey = $webRegkey;

        return $new;
    }

    public function getShortCode(): string
    {
        return $this->shortCode;
    }

    public function withShortCode(string $shortCode): \Flexnet\LicenseService\Type\CreateShortCodeDataType
    {
        $new = clone $this;
        $new->shortCode = $shortCode;

        return $new;
    }

    public function getPublisherAttributes(): ?\Flexnet\LicenseService\Type\PublisherAttributesListDataType
    {
        return $this->publisherAttributes;
    }

    public function withPublisherAttributes(?\Flexnet\LicenseService\Type\PublisherAttributesListDataType $publisherAttributes): \Flexnet\LicenseService\Type\CreateShortCodeDataType
    {
        $new = clone $this;
        $new->publisherAttributes = $publisherAttributes;

        return $new;
    }

    public function getOverridePolicy(): ?bool
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(?bool $overridePolicy): \Flexnet\LicenseService\Type\CreateShortCodeDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getShortCodeActivationType(): ?\Flexnet\LicenseService\Type\ShortCodeActivationType
    {
        return $this->shortCodeActivationType;
    }

    public function withShortCodeActivationType(?\Flexnet\LicenseService\Type\ShortCodeActivationType $shortCodeActivationType): \Flexnet\LicenseService\Type\CreateShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeActivationType = $shortCodeActivationType;

        return $new;
    }

    public function getReinstallFulfillment(): ?\Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->reinstallFulfillment;
    }

    public function withReinstallFulfillment(?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $reinstallFulfillment): \Flexnet\LicenseService\Type\CreateShortCodeDataType
    {
        $new = clone $this;
        $new->reinstallFulfillment = $reinstallFulfillment;

        return $new;
    }
}
