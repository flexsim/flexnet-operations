<?php

namespace Flexnet\LicenseService\Type;

class AttributeDescriptorType
{
    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var string|null
     */
    private $stringValue;

    /**
     * @var \DateTimeInterface|null
     */
    private $dateValue;

    /**
     * @var bool|null
     */
    private $booleanValue;

    /**
     * @var int|null
     */
    private $integerValue;

    /**
     * @var string|array<string>|null
     */
    private $arrayValue;

    /**
     * Constructor
     *
     * @param string $attributeName
     * @param string|null $stringValue
     * @param \DateTimeInterface|null $dateValue
     * @param bool|null $booleanValue
     * @param int|null $integerValue
     * @param string|array<string>|null $arrayValue
     */
    public function __construct(string $attributeName, string|null $stringValue = null, \DateTimeInterface|null $dateValue = null, bool|null $booleanValue = null, int|null $integerValue = null, string|array|null $arrayValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
        $this->dateValue = $dateValue;
        $this->booleanValue = $booleanValue;
        $this->integerValue = $integerValue;
        $this->arrayValue = $arrayValue;
    }

    /**
     * @param string $attributeName
     * @param string|null $stringValue
     * @param \DateTimeInterface|null $dateValue
     * @param bool|null $booleanValue
     * @param int|null $integerValue
     * @param string|array<string>|null $arrayValue
     */
    public static function create(string $attributeName, string|null $stringValue = null, \DateTimeInterface|null $dateValue = null, bool|null $booleanValue = null, int|null $integerValue = null, string|array|null $arrayValue = null)
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
     * @return AttributeDescriptorType
     */
    public function withAttributeName(string $attributeName) : \Flexnet\LicenseService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getStringValue() : string|null
    {
        return $this->stringValue;
    }

    /**
     * @param string|null $stringValue
     * @return AttributeDescriptorType
     */
    public function withStringValue(string|null $stringValue) : \Flexnet\LicenseService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getDateValue() : \DateTimeInterface|null
    {
        return $this->dateValue;
    }

    /**
     * @param \DateTimeInterface|null $dateValue
     * @return AttributeDescriptorType
     */
    public function withDateValue(\DateTimeInterface|null $dateValue) : \Flexnet\LicenseService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->dateValue = $dateValue;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getBooleanValue() : bool|null
    {
        return $this->booleanValue;
    }

    /**
     * @param bool|null $booleanValue
     * @return AttributeDescriptorType
     */
    public function withBooleanValue(bool|null $booleanValue) : \Flexnet\LicenseService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->booleanValue = $booleanValue;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getIntegerValue() : int|null
    {
        return $this->integerValue;
    }

    /**
     * @param int|null $integerValue
     * @return AttributeDescriptorType
     */
    public function withIntegerValue(int|null $integerValue) : \Flexnet\LicenseService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->integerValue = $integerValue;

        return $new;
    }

    /**
     * @return string|array<string>|null
     */
    public function getArrayValue() : string|array|null
    {
        return $this->arrayValue;
    }

    /**
     * @param string|array<string>|null $arrayValue
     * @return AttributeDescriptorType
     */
    public function withArrayValue(string|array|null $arrayValue) : \Flexnet\LicenseService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->arrayValue = $arrayValue;

        return $new;
    }
}

