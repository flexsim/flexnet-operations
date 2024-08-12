<?php

namespace Flexnet\LicenseService\Type;

class StateQueryType
{
    /**
     * @var \Flexnet\LicenseService\Type\StateType
     */
    private $value;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleSearchType
     */
    private $searchType;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\StateType $value, \Flexnet\LicenseService\Type\SimpleSearchType $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(\Flexnet\LicenseService\Type\StateType $value, \Flexnet\LicenseService\Type\SimpleSearchType $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): \Flexnet\LicenseService\Type\StateType
    {
        return $this->value;
    }

    public function withValue(\Flexnet\LicenseService\Type\StateType $value): \Flexnet\LicenseService\Type\StateQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\LicenseService\Type\SimpleSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\LicenseService\Type\SimpleSearchType $searchType): \Flexnet\LicenseService\Type\StateQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
