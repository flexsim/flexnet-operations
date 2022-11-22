<?php

namespace Flexsim\FlexnetOperations\Type;

class StateQueryType extends FlexnetType
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $searchType;

    /**
     * Constructor
     *
     * @param  string  $value
     * @param  string  $searchType
     */
    public function __construct(string $value, string $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $value
     * @param  string  $searchType
     */
    public static function create(string $value, string $searchType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param  string  $value
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
     * @param  string  $searchType
     * @return $this
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;

        return $this;
    }
}
