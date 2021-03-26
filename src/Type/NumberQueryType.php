<?php

namespace Flexsim\FlexnetOperations\Type;

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
     * @var int $value
     * @var string $searchType
     */
    public function __construct(int $value, string $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    /**
     * create a new instance of this class
     *
     * @var int $value
     * @var string $searchType
     */
    public static function create(int $value, string $searchType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * @param string $searchType
     * @return $this
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;
        return $this;
    }


}

