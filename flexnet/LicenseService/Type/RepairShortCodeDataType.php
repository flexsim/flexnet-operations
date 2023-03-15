<?php

namespace Flexnet\LicenseService\Type;

class RepairShortCodeDataType
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
     *
     * @param  \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null  $publisherAttributes
     * @param  bool|null  $overridePolicy
     */
    public function __construct(string $shortCode, string $webRegKey, PublisherAttributesListDataType|null $publisherAttributes = null, bool|null $overridePolicy = null)
    {
        $this->shortCode = $shortCode;
        $this->webRegKey = $webRegKey;
        $this->publisherAttributes = $publisherAttributes;
        $this->overridePolicy = $overridePolicy;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null  $publisherAttributes
     * @param  bool|null  $overridePolicy
     */
    public static function create(string $shortCode, string $webRegKey, PublisherAttributesListDataType|null $publisherAttributes = null, bool|null $overridePolicy = null)
    {
        return new static(...\func_get_args());
    }

    public function getShortCode(): string
    {
        return $this->shortCode;
    }

    public function withShortCode(string $shortCode): RepairShortCodeDataType
    {
        $new = clone $this;
        $new->shortCode = $shortCode;

        return $new;
    }

    public function getWebRegKey(): string
    {
        return $this->webRegKey;
    }

    public function withWebRegKey(string $webRegKey): RepairShortCodeDataType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

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
    public function withPublisherAttributes(PublisherAttributesListDataType|null $publisherAttributes): RepairShortCodeDataType
    {
        $new = clone $this;
        $new->publisherAttributes = $publisherAttributes;

        return $new;
    }

    public function getOverridePolicy(): bool|null
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(bool|null $overridePolicy): RepairShortCodeDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }
}
