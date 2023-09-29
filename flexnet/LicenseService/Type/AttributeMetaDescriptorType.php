<?php

namespace Flexnet\LicenseService\Type;

class AttributeMetaDescriptorType
{
    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var string
     */
    private $attributeDataType;

    /**
     * @var string
     */
    private $namespace;

    /**
     * @var \Flexnet\LicenseService\Type\ValueType|null
     */
    private $validValues;

    /**
     * Constructor
     */
    public function __construct(string $attributeName, string $attributeDataType, string $namespace, ValueType $validValues = null)
    {
        $this->attributeName = $attributeName;
        $this->attributeDataType = $attributeDataType;
        $this->namespace = $namespace;
        $this->validValues = $validValues;
    }

    public static function create(string $attributeName, string $attributeDataType, string $namespace, ValueType $validValues = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getAttributeDataType(): string
    {
        return $this->attributeDataType;
    }

    public function withAttributeDataType(string $attributeDataType): AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->attributeDataType = $attributeDataType;

        return $new;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function withNamespace(string $namespace): AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->namespace = $namespace;

        return $new;
    }

    public function getValidValues(): ?ValueType
    {
        return $this->validValues;
    }

    public function withValidValues(?ValueType $validValues): AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->validValues = $validValues;

        return $new;
    }
}
