<?php

namespace Flexnet\LicenseService\Type;

class SimpleAttributeDataType
{
    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var string
     */
    private $attributeValue;

    /**
     * Constructor
     */
    public function __construct(string $attributeName, string $attributeValue)
    {
        $this->attributeName = $attributeName;
        $this->attributeValue = $attributeValue;
    }

    public static function create(string $attributeName, string $attributeValue)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): \Flexnet\LicenseService\Type\SimpleAttributeDataType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getAttributeValue(): string
    {
        return $this->attributeValue;
    }

    public function withAttributeValue(string $attributeValue): \Flexnet\LicenseService\Type\SimpleAttributeDataType
    {
        $new = clone $this;
        $new->attributeValue = $attributeValue;

        return $new;
    }
}
