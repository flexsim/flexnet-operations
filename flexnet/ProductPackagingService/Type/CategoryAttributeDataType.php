<?php

namespace Flexnet\ProductPackagingService\Type;

class CategoryAttributeDataType
{
    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var bool
     */
    private $isRequired;

    /**
     * @var string
     */
    private $dataType;

    /**
     * @var string|null
     */
    private $maxLength;

    /**
     * @var \Flexnet\ProductPackagingService\Type\ValueType|null
     */
    private $validValues;

    /**
     * Constructor
     */
    public function __construct(string $attributeName, bool $isRequired, string $dataType, string $maxLength = null, ValueType $validValues = null)
    {
        $this->attributeName = $attributeName;
        $this->isRequired = $isRequired;
        $this->dataType = $dataType;
        $this->maxLength = $maxLength;
        $this->validValues = $validValues;
    }

    public static function create(string $attributeName, bool $isRequired, string $dataType, string $maxLength = null, ValueType $validValues = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): CategoryAttributeDataType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getIsRequired(): bool
    {
        return $this->isRequired;
    }

    public function withIsRequired(bool $isRequired): CategoryAttributeDataType
    {
        $new = clone $this;
        $new->isRequired = $isRequired;

        return $new;
    }

    public function getDataType(): string
    {
        return $this->dataType;
    }

    public function withDataType(string $dataType): CategoryAttributeDataType
    {
        $new = clone $this;
        $new->dataType = $dataType;

        return $new;
    }

    public function getMaxLength(): ?string
    {
        return $this->maxLength;
    }

    public function withMaxLength(?string $maxLength): CategoryAttributeDataType
    {
        $new = clone $this;
        $new->maxLength = $maxLength;

        return $new;
    }

    public function getValidValues(): ?ValueType
    {
        return $this->validValues;
    }

    public function withValidValues(?ValueType $validValues): CategoryAttributeDataType
    {
        $new = clone $this;
        $new->validValues = $validValues;

        return $new;
    }
}
