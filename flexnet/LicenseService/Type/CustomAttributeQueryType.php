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
    public function __construct(string $attributeName, ?\Flexnet\LicenseService\Type\SimpleQueryType $stringValue = null, ?\Flexnet\LicenseService\Type\NumberQueryType $numberValue = null, ?\Flexnet\LicenseService\Type\DateQueryType $dateValue = null, ?bool $booleanValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
        $this->numberValue = $numberValue;
        $this->dateValue = $dateValue;
        $this->booleanValue = $booleanValue;
    }

    public static function create(string $attributeName, ?\Flexnet\LicenseService\Type\SimpleQueryType $stringValue = null, ?\Flexnet\LicenseService\Type\NumberQueryType $numberValue = null, ?\Flexnet\LicenseService\Type\DateQueryType $dateValue = null, ?bool $booleanValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): \Flexnet\LicenseService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getStringValue(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->stringValue;
    }

    public function withStringValue(?\Flexnet\LicenseService\Type\SimpleQueryType $stringValue): \Flexnet\LicenseService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }

    public function getNumberValue(): ?\Flexnet\LicenseService\Type\NumberQueryType
    {
        return $this->numberValue;
    }

    public function withNumberValue(?\Flexnet\LicenseService\Type\NumberQueryType $numberValue): \Flexnet\LicenseService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->numberValue = $numberValue;

        return $new;
    }

    public function getDateValue(): ?\Flexnet\LicenseService\Type\DateQueryType
    {
        return $this->dateValue;
    }

    public function withDateValue(?\Flexnet\LicenseService\Type\DateQueryType $dateValue): \Flexnet\LicenseService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->dateValue = $dateValue;

        return $new;
    }

    public function getBooleanValue(): ?bool
    {
        return $this->booleanValue;
    }

    public function withBooleanValue(?bool $booleanValue): \Flexnet\LicenseService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->booleanValue = $booleanValue;

        return $new;
    }
}
