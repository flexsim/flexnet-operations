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
     *
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $fulfillmentAttributes
     * @param  bool|null  $needTimeZone
     */
    public function __construct(AttributeMetaDescriptorDataType|null $fulfillmentAttributes = null, bool|null $needTimeZone = null)
    {
        $this->fulfillmentAttributes = $fulfillmentAttributes;
        $this->needTimeZone = $needTimeZone;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $fulfillmentAttributes
     * @param  bool|null  $needTimeZone
     */
    public static function create(AttributeMetaDescriptorDataType|null $fulfillmentAttributes = null, bool|null $needTimeZone = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
     */
    public function getFulfillmentAttributes(): AttributeMetaDescriptorDataType|null
    {
        return $this->fulfillmentAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $fulfillmentAttributes
     */
    public function withFulfillmentAttributes(AttributeMetaDescriptorDataType|null $fulfillmentAttributes): GetFulfillmentAttributesDataType
    {
        $new = clone $this;
        $new->fulfillmentAttributes = $fulfillmentAttributes;

        return $new;
    }

    public function getNeedTimeZone(): bool|null
    {
        return $this->needTimeZone;
    }

    public function withNeedTimeZone(bool|null $needTimeZone): GetFulfillmentAttributesDataType
    {
        $new = clone $this;
        $new->needTimeZone = $needTimeZone;

        return $new;
    }
}
