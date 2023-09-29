<?php

namespace Flexnet\LicenseService\Type;

class CustomAttributeQueryType
{
    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $stringValue;

    /**
     * @var \Flexnet\LicenseService\Type\NumberQueryType|null
     */
    private $numberValue;

    /**
     * @var \Flexnet\LicenseService\Type\DateQueryType|null
     */
    private $dateValue;

    /**
     * @var bool|null
     */
    private $booleanValue;

    /**
     * Constructor
     */
    public function __construct(string $attributeName, SimpleQueryType $stringValue = null, NumberQueryType $numberValue = null, DateQueryType $dateValue = null, bool $booleanValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
        $this->numberValue = $numberValue;
        $this->dateValue = $dateValue;
        $this->booleanValue = $booleanValue;
    }

    public static function create(string $attributeName, SimpleQueryType $stringValue = null, NumberQueryType $numberValue = null, DateQueryType $dateValue = null, bool $booleanValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): CustomAttributeQueryType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getStringValue(): ?SimpleQueryType
    {
        return $this->stringValue;
    }

    public function withStringValue(?SimpleQueryType $stringValue): CustomAttributeQueryType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }

    public function getNumberValue(): ?NumberQueryType
    {
        return $this->numberValue;
    }

    public function withNumberValue(?NumberQueryType $numberValue): CustomAttributeQueryType
    {
        $new = clone $this;
        $new->numberValue = $numberValue;

        return $new;
    }

    public function getDateValue(): ?DateQueryType
    {
        return $this->dateValue;
    }

    public function withDateValue(?DateQueryType $dateValue): CustomAttributeQueryType
    {
        $new = clone $this;
        $new->dateValue = $dateValue;

        return $new;
    }

    public function getBooleanValue(): ?bool
    {
        return $this->booleanValue;
    }

    public function withBooleanValue(?bool $booleanValue): CustomAttributeQueryType
    {
        $new = clone $this;
        $new->booleanValue = $booleanValue;

        return $new;
    }
}
