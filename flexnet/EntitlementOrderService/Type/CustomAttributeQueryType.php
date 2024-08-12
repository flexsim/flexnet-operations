<?php

namespace Flexnet\EntitlementOrderService\Type;

class CustomAttributeQueryType
{
    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $stringValue;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\NumberQueryType|null
     */
    private $numberValue;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    private $dateValue;

    /**
     * @var bool|null
     */
    private $booleanValue;

    /**
     * Constructor
     */
    public function __construct(string $attributeName, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $stringValue = null, ?\Flexnet\EntitlementOrderService\Type\NumberQueryType $numberValue = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $dateValue = null, ?bool $booleanValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
        $this->numberValue = $numberValue;
        $this->dateValue = $dateValue;
        $this->booleanValue = $booleanValue;
    }

    public static function create(string $attributeName, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $stringValue = null, ?\Flexnet\EntitlementOrderService\Type\NumberQueryType $numberValue = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $dateValue = null, ?bool $booleanValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getStringValue(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->stringValue;
    }

    public function withStringValue(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $stringValue): \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }

    public function getNumberValue(): ?\Flexnet\EntitlementOrderService\Type\NumberQueryType
    {
        return $this->numberValue;
    }

    public function withNumberValue(?\Flexnet\EntitlementOrderService\Type\NumberQueryType $numberValue): \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->numberValue = $numberValue;

        return $new;
    }

    public function getDateValue(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->dateValue;
    }

    public function withDateValue(?\Flexnet\EntitlementOrderService\Type\DateQueryType $dateValue): \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->dateValue = $dateValue;

        return $new;
    }

    public function getBooleanValue(): ?bool
    {
        return $this->booleanValue;
    }

    public function withBooleanValue(?bool $booleanValue): \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->booleanValue = $booleanValue;

        return $new;
    }
}
