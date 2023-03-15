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
     *
     * @param  string|null  $maxLength
     * @param  \Flexnet\ProductPackagingService\Type\ValueType|null  $validValues
     */
    public function __construct(string $attributeName, bool $isRequired, string $dataType, string|null $maxLength = null, ValueType|null $validValues = null)
    {
        $this->attributeName = $attributeName;
        $this->isRequired = $isRequired;
        $this->dataType = $dataType;
        $this->maxLength = $maxLength;
        $this->validValues = $validValues;
    }

    /**
     * @param  string|null  $maxLength
     * @param  \Flexnet\ProductPackagingService\Type\ValueType|null  $validValues
     */
    public static function create(string $attributeName, bool $isRequired, string $dataType, string|null $maxLength = null, ValueType|null $validValues = null)
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

    public function getMaxLength(): string|null
    {
        return $this->maxLength;
    }

    public function withMaxLength(string|null $maxLength): CategoryAttributeDataType
    {
        $new = clone $this;
        $new->maxLength = $maxLength;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ValueType|null
     */
    public function getValidValues(): ValueType|null
    {
        return $this->validValues;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ValueType|null  $validValues
     */
    public function withValidValues(ValueType|null $validValues): CategoryAttributeDataType
    {
        $new = clone $this;
        $new->validValues = $validValues;

        return $new;
    }
}
