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
     *
     * @param  string  $attributeName
     * @param  string  $attributeValue
     */
    public function __construct(string $attributeName, string $attributeValue)
    {
        $this->attributeName = $attributeName;
        $this->attributeValue = $attributeValue;
    }

    /**
     * @param  string  $attributeName
     * @param  string  $attributeValue
     */
    public static function create(string $attributeName, string $attributeValue)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    /**
     * @param  string  $attributeName
     * @return SimpleAttributeDataType
     */
    public function withAttributeName(string $attributeName): SimpleAttributeDataType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttributeValue(): string
    {
        return $this->attributeValue;
    }

    /**
     * @param  string  $attributeValue
     * @return SimpleAttributeDataType
     */
    public function withAttributeValue(string $attributeValue): SimpleAttributeDataType
    {
        $new = clone $this;
        $new->attributeValue = $attributeValue;

        return $new;
    }
}
