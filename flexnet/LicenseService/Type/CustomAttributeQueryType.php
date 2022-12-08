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
     * @param string $attributeName
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $stringValue
     * @param \Flexnet\LicenseService\Type\NumberQueryType|null $numberValue
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $dateValue
     * @param bool|null $booleanValue
     */
    public function __construct(string $attributeName, \Flexnet\LicenseService\Type\SimpleQueryType|null $stringValue = null, \Flexnet\LicenseService\Type\NumberQueryType|null $numberValue = null, \Flexnet\LicenseService\Type\DateQueryType|null $dateValue = null, bool|null $booleanValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
        $this->numberValue = $numberValue;
        $this->dateValue = $dateValue;
        $this->booleanValue = $booleanValue;
    }

    /**
     * @param string $attributeName
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $stringValue
     * @param \Flexnet\LicenseService\Type\NumberQueryType|null $numberValue
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $dateValue
     * @param bool|null $booleanValue
     */
    public static function create(string $attributeName, \Flexnet\LicenseService\Type\SimpleQueryType|null $stringValue = null, \Flexnet\LicenseService\Type\NumberQueryType|null $numberValue = null, \Flexnet\LicenseService\Type\DateQueryType|null $dateValue = null, bool|null $booleanValue = null)
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
     * @return CustomAttributeQueryType
     */
    public function withAttributeName(string $attributeName) : \Flexnet\LicenseService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getStringValue() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->stringValue;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $stringValue
     * @return CustomAttributeQueryType
     */
    public function withStringValue(\Flexnet\LicenseService\Type\SimpleQueryType|null $stringValue) : \Flexnet\LicenseService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NumberQueryType|null
     */
    public function getNumberValue() : \Flexnet\LicenseService\Type\NumberQueryType|null
    {
        return $this->numberValue;
    }

    /**
     * @param \Flexnet\LicenseService\Type\NumberQueryType|null $numberValue
     * @return CustomAttributeQueryType
     */
    public function withNumberValue(\Flexnet\LicenseService\Type\NumberQueryType|null $numberValue) : \Flexnet\LicenseService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->numberValue = $numberValue;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateQueryType|null
     */
    public function getDateValue() : \Flexnet\LicenseService\Type\DateQueryType|null
    {
        return $this->dateValue;
    }

    /**
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $dateValue
     * @return CustomAttributeQueryType
     */
    public function withDateValue(\Flexnet\LicenseService\Type\DateQueryType|null $dateValue) : \Flexnet\LicenseService\Type\CustomAttributeQueryType
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
     * @return CustomAttributeQueryType
     */
    public function withBooleanValue(bool|null $booleanValue) : \Flexnet\LicenseService\Type\CustomAttributeQueryType
    {
        $new = clone $this;
        $new->booleanValue = $booleanValue;

        return $new;
    }
}

