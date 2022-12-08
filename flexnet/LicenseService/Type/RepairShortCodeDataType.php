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
     * @param string $shortCode
     * @param string $webRegKey
     * @param \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null $publisherAttributes
     * @param bool|null $overridePolicy
     */
    public function __construct(string $shortCode, string $webRegKey, \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null $publisherAttributes = null, bool|null $overridePolicy = null)
    {
        $this->shortCode = $shortCode;
        $this->webRegKey = $webRegKey;
        $this->publisherAttributes = $publisherAttributes;
        $this->overridePolicy = $overridePolicy;
    }

    /**
     * @param string $shortCode
     * @param string $webRegKey
     * @param \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null $publisherAttributes
     * @param bool|null $overridePolicy
     */
    public static function create(string $shortCode, string $webRegKey, \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null $publisherAttributes = null, bool|null $overridePolicy = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getShortCode() : string
    {
        return $this->shortCode;
    }

    /**
     * @param string $shortCode
     * @return RepairShortCodeDataType
     */
    public function withShortCode(string $shortCode) : \Flexnet\LicenseService\Type\RepairShortCodeDataType
    {
        $new = clone $this;
        $new->shortCode = $shortCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getWebRegKey() : string
    {
        return $this->webRegKey;
    }

    /**
     * @param string $webRegKey
     * @return RepairShortCodeDataType
     */
    public function withWebRegKey(string $webRegKey) : \Flexnet\LicenseService\Type\RepairShortCodeDataType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null
     */
    public function getPublisherAttributes() : \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null
    {
        return $this->publisherAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\PublisherAttributesListDataType|null $publisherAttributes
     * @return RepairShortCodeDataType
     */
    public function withPublisherAttributes(\Flexnet\LicenseService\Type\PublisherAttributesListDataType|null $publisherAttributes) : \Flexnet\LicenseService\Type\RepairShortCodeDataType
    {
        $new = clone $this;
        $new->publisherAttributes = $publisherAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOverridePolicy() : bool|null
    {
        return $this->overridePolicy;
    }

    /**
     * @param bool|null $overridePolicy
     * @return RepairShortCodeDataType
     */
    public function withOverridePolicy(bool|null $overridePolicy) : \Flexnet\LicenseService\Type\RepairShortCodeDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }
}

