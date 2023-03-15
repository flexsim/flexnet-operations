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
     *
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $stringValue
     * @param  \Flexnet\LicenseService\Type\NumberQueryType|null  $numberValue
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $dateValue
     * @param  bool|null  $booleanValue
     */
    public function __construct(string $attributeName, SimpleQueryType|null $stringValue = null, NumberQueryType|null $numberValue = null, DateQueryType|null $dateValue = null, bool|null $booleanValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
        $this->numberValue = $numberValue;
        $this->dateValue = $dateValue;
        $this->booleanValue = $booleanValue;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $stringValue
     * @param  \Flexnet\LicenseService\Type\NumberQueryType|null  $numberValue
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $dateValue
     * @param  bool|null  $booleanValue
     */
    public static function create(string $attributeName, SimpleQueryType|null $stringValue = null, NumberQueryType|null $numberValue = null, DateQueryType|null $dateValue = null, bool|null $booleanValue = null)
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

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getStringValue(): SimpleQueryType|null
    {
        return $this->stringValue;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $stringValue
     */
    public function withStringValue(SimpleQueryType|null $stringValue): CustomAttributeQueryType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NumberQueryType|null
     */
    public function getNumberValue(): NumberQueryType|null
    {
        return $this->numberValue;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\NumberQueryType|null  $numberValue
     */
    public function withNumberValue(NumberQueryType|null $numberValue): CustomAttributeQueryType
    {
        $new = clone $this;
        $new->numberValue = $numberValue;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateQueryType|null
     */
    public function getDateValue(): DateQueryType|null
    {
        return $this->dateValue;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $dateValue
     */
    public function withDateValue(DateQueryType|null $dateValue): CustomAttributeQueryType
    {
        $new = clone $this;
        $new->dateValue = $dateValue;

        return $new;
    }

    public function getBooleanValue(): bool|null
    {
        return $this->booleanValue;
    }

    public function withBooleanValue(bool|null $booleanValue): CustomAttributeQueryType
    {
        $new = clone $this;
        $new->booleanValue = $booleanValue;

        return $new;
    }
}
