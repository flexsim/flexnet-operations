<?php

namespace Flexnet\LicenseService\Type;

class NumberQueryType
{
    /**
     * @var int
     */
    private $value;

    /**
     * @var string
     */
    private $searchType;

    /**
     * Constructor
     *
     * @param int $value
     * @param string $searchType
     */
    public function __construct(int $value, string $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    /**
     * @param int $value
     * @param string $searchType
     */
    public static function create(int $value, string $searchType)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return int
     */
    public function getValue() : int
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return NumberQueryType
     */
    public function withValue(int $value) : \Flexnet\LicenseService\Type\NumberQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchType() : string
    {
        return $this->searchType;
    }

    /**
     * @param string $searchType
     * @return NumberQueryType
     */
    public function withSearchType(string $searchType) : \Flexnet\LicenseService\Type\NumberQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}

