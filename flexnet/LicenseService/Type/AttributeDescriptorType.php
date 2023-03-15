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
     * @param  string|null  $stringValue
     * @param  \DateTimeInterface|null  $dateValue
     * @param  bool|null  $booleanValue
     * @param  int|null  $integerValue
     * @param  string|array<string>|null  $arrayValue
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
     * @param  string|null  $stringValue
     * @param  \DateTimeInterface|null  $dateValue
     * @param  bool|null  $booleanValue
     * @param  int|null  $integerValue
     * @param  string|array<string>|null  $arrayValue
     */
    public static function create(string $attributeName, string|null $stringValue = null, \DateTimeInterface|null $dateValue = null, bool|null $booleanValue = null, int|null $integerValue = null, string|array|null $arrayValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): AttributeDescriptorType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getStringValue(): string|null
    {
        return $this->stringValue;
    }

    public function withStringValue(string|null $stringValue): AttributeDescriptorType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }

    public function getDateValue(): \DateTimeInterface|null
    {
        return $this->dateValue;
    }

    public function withDateValue(\DateTimeInterface|null $dateValue): AttributeDescriptorType
    {
        $new = clone $this;
        $new->dateValue = $dateValue;

        return $new;
    }

    public function getBooleanValue(): bool|null
    {
        return $this->booleanValue;
    }

    public function withBooleanValue(bool|null $booleanValue): AttributeDescriptorType
    {
        $new = clone $this;
        $new->booleanValue = $booleanValue;

        return $new;
    }

    public function getIntegerValue(): int|null
    {
        return $this->integerValue;
    }

    public function withIntegerValue(int|null $integerValue): AttributeDescriptorType
    {
        $new = clone $this;
        $new->integerValue = $integerValue;

        return $new;
    }

    /**
     * @return string|array<string>|null
     */
    public function getArrayValue(): string|array|null
    {
        return $this->arrayValue;
    }

    /**
     * @param  string|array<string>|null  $arrayValue
     */
    public function withArrayValue(string|array|null $arrayValue): AttributeDescriptorType
    {
        $new = clone $this;
        $new->arrayValue = $arrayValue;

        return $new;
    }
}
