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
     * @param \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $fulfillmentAttributes
     * @param bool|null $needTimeZone
     */
    public function __construct(\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $fulfillmentAttributes = null, bool|null $needTimeZone = null)
    {
        $this->fulfillmentAttributes = $fulfillmentAttributes;
        $this->needTimeZone = $needTimeZone;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $fulfillmentAttributes
     * @param bool|null $needTimeZone
     */
    public static function create(\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $fulfillmentAttributes = null, bool|null $needTimeZone = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
     */
    public function getFulfillmentAttributes() : \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
    {
        return $this->fulfillmentAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $fulfillmentAttributes
     * @return GetFulfillmentAttributesDataType
     */
    public function withFulfillmentAttributes(\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $fulfillmentAttributes) : \Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType
    {
        $new = clone $this;
        $new->fulfillmentAttributes = $fulfillmentAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getNeedTimeZone() : bool|null
    {
        return $this->needTimeZone;
    }

    /**
     * @param bool|null $needTimeZone
     * @return GetFulfillmentAttributesDataType
     */
    public function withNeedTimeZone(bool|null $needTimeZone) : \Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType
    {
        $new = clone $this;
        $new->needTimeZone = $needTimeZone;

        return $new;
    }
}

