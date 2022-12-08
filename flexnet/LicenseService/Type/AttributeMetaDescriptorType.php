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
     *
     * @param string $attributeName
     * @param string $attributeDataType
     * @param string $namespace
     * @param \Flexnet\LicenseService\Type\ValueType|null $validValues
     */
    public function __construct(string $attributeName, string $attributeDataType, string $namespace, \Flexnet\LicenseService\Type\ValueType|null $validValues = null)
    {
        $this->attributeName = $attributeName;
        $this->attributeDataType = $attributeDataType;
        $this->namespace = $namespace;
        $this->validValues = $validValues;
    }

    /**
     * @param string $attributeName
     * @param string $attributeDataType
     * @param string $namespace
     * @param \Flexnet\LicenseService\Type\ValueType|null $validValues
     */
    public static function create(string $attributeName, string $attributeDataType, string $namespace, \Flexnet\LicenseService\Type\ValueType|null $validValues = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getAttributeName() : string
    {
        return $this->attributeName;
    }

    /**
     * @param string $attributeName
     * @return AttributeMetaDescriptorType
     */
    public function withAttributeName(string $attributeName) : \Flexnet\LicenseService\Type\AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttributeDataType() : string
    {
        return $this->attributeDataType;
    }

    /**
     * @param string $attributeDataType
     * @return AttributeMetaDescriptorType
     */
    public function withAttributeDataType(string $attributeDataType) : \Flexnet\LicenseService\Type\AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->attributeDataType = $attributeDataType;

        return $new;
    }

    /**
     * @return string
     */
    public function getNamespace() : string
    {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     * @return AttributeMetaDescriptorType
     */
    public function withNamespace(string $namespace) : \Flexnet\LicenseService\Type\AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->namespace = $namespace;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ValueType|null
     */
    public function getValidValues() : \Flexnet\LicenseService\Type\ValueType|null
    {
        return $this->validValues;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ValueType|null $validValues
     * @return AttributeMetaDescriptorType
     */
    public function withValidValues(\Flexnet\LicenseService\Type\ValueType|null $validValues) : \Flexnet\LicenseService\Type\AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->validValues = $validValues;

        return $new;
    }
}

