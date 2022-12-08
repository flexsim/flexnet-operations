<?php

namespace Flexnet\LicenseService\Type;

class DateTimeQueryType
{
    /**
     * @var \DateTimeInterface
     */
    private $value;

    /**
     * @var string
     */
    private $searchType;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $value
     * @param string $searchType
     */
    public function __construct(\DateTimeInterface $value, string $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    /**
     * @param \DateTimeInterface $value
     * @param string $searchType
     */
    public static function create(\DateTimeInterface $value, string $searchType)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \DateTimeInterface
     */
    public function getValue() : \DateTimeInterface
    {
        return $this->value;
    }

    /**
     * @param \DateTimeInterface $value
     * @return DateTimeQueryType
     */
    public function withValue(\DateTimeInterface $value) : \Flexnet\LicenseService\Type\DateTimeQueryType
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
     * @return DateTimeQueryType
     */
    public function withSearchType(string $searchType) : \Flexnet\LicenseService\Type\DateTimeQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}

