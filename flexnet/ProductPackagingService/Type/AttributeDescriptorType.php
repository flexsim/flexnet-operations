<?php

namespace Flexnet\ProductPackagingService\Type;

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
     * @param  string|array<string>|null  $arrayValue
     */
    public function __construct(string $attributeName, ?string $stringValue = null, ?\DateTimeInterface $dateValue = null, ?bool $booleanValue = null, ?int $integerValue = null, string|array|null $arrayValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
        $this->dateValue = $dateValue;
        $this->booleanValue = $booleanValue;
        $this->integerValue = $integerValue;
        $this->arrayValue = $arrayValue;
    }

    /**
     * @param  string|array<string>|null  $arrayValue
     */
    public static function create(string $attributeName, ?string $stringValue = null, ?\DateTimeInterface $dateValue = null, ?bool $booleanValue = null, ?int $integerValue = null, string|array|null $arrayValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): \Flexnet\ProductPackagingService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getStringValue(): ?string
    {
        return $this->stringValue;
    }

    public function withStringValue(?string $stringValue): \Flexnet\ProductPackagingService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }

    public function getDateValue(): ?\DateTimeInterface
    {
        return $this->dateValue;
    }

    public function withDateValue(?\DateTimeInterface $dateValue): \Flexnet\ProductPackagingService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->dateValue = $dateValue;

        return $new;
    }

    public function getBooleanValue(): ?bool
    {
        return $this->booleanValue;
    }

    public function withBooleanValue(?bool $booleanValue): \Flexnet\ProductPackagingService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->booleanValue = $booleanValue;

        return $new;
    }

    public function getIntegerValue(): ?int
    {
        return $this->integerValue;
    }

    public function withIntegerValue(?int $integerValue): \Flexnet\ProductPackagingService\Type\AttributeDescriptorType
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
    public function withArrayValue(string|array|null $arrayValue): \Flexnet\ProductPackagingService\Type\AttributeDescriptorType
    {
        $new = clone $this;
        $new->arrayValue = $arrayValue;

        return $new;
    }
}
