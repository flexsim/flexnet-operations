<?php

namespace Flexnet\LicenseService\Type;

class GetFulfillmentAttributesDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
     */
    private $fulfillmentAttributes;

    /**
     * @var bool|null
     */
    private $needTimeZone;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $fulfillmentAttributes = null, ?bool $needTimeZone = null)
    {
        $this->fulfillmentAttributes = $fulfillmentAttributes;
        $this->needTimeZone = $needTimeZone;
    }

    public static function create(?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $fulfillmentAttributes = null, ?bool $needTimeZone = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentAttributes(): ?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType
    {
        return $this->fulfillmentAttributes;
    }

    public function withFulfillmentAttributes(?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $fulfillmentAttributes): \Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType
    {
        $new = clone $this;
        $new->fulfillmentAttributes = $fulfillmentAttributes;

        return $new;
    }

    public function getNeedTimeZone(): ?bool
    {
        return $this->needTimeZone;
    }

    public function withNeedTimeZone(?bool $needTimeZone): \Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType
    {
        $new = clone $this;
        $new->needTimeZone = $needTimeZone;

        return $new;
    }
}
