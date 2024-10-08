<?php

namespace Flexnet\LicenseService\Type;

class ReturnShortCodeDataType
{
    /**
     * @var string
     */
    private $shortCode;

    /**
     * @var string
     */
    private $webRegKey;

    /**
     * @var \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null
     */
    private $publisherAttributes;

    /**
     * @var bool|null
     */
    private $overridePolicy;

    /**
     * Constructor
     */
    public function __construct(string $shortCode, string $webRegKey, ?\Flexnet\LicenseService\Type\PublisherAttributesListDataType $publisherAttributes = null, ?bool $overridePolicy = null)
    {
        $this->shortCode = $shortCode;
        $this->webRegKey = $webRegKey;
        $this->publisherAttributes = $publisherAttributes;
        $this->overridePolicy = $overridePolicy;
    }

    public static function create(string $shortCode, string $webRegKey, ?\Flexnet\LicenseService\Type\PublisherAttributesListDataType $publisherAttributes = null, ?bool $overridePolicy = null)
    {
        return new static(...\func_get_args());
    }

    public function getShortCode(): string
    {
        return $this->shortCode;
    }

    public function withShortCode(string $shortCode): \Flexnet\LicenseService\Type\ReturnShortCodeDataType
    {
        $new = clone $this;
        $new->shortCode = $shortCode;

        return $new;
    }

    public function getWebRegKey(): string
    {
        return $this->webRegKey;
    }

    public function withWebRegKey(string $webRegKey): \Flexnet\LicenseService\Type\ReturnShortCodeDataType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

        return $new;
    }

    public function getPublisherAttributes(): ?\Flexnet\LicenseService\Type\PublisherAttributesListDataType
    {
        return $this->publisherAttributes;
    }

    public function withPublisherAttributes(?\Flexnet\LicenseService\Type\PublisherAttributesListDataType $publisherAttributes): \Flexnet\LicenseService\Type\ReturnShortCodeDataType
    {
        $new = clone $this;
        $new->publisherAttributes = $publisherAttributes;

        return $new;
    }

    public function getOverridePolicy(): ?bool
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(?bool $overridePolicy): \Flexnet\LicenseService\Type\ReturnShortCodeDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }
}
