<?php

namespace Flexsim\FlexnetOperations\Type;

class DateQueryType
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
     * @var \DateTimeInterface $value
     * @var string $searchType
     */
    public function __construct(\DateTimeInterface $value, string $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    /**
     * create a new instance of this class
     *
     * @var \DateTimeInterface $value
     * @var string $searchType
     */
    public static function create(\DateTimeInterface $value, string $searchType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \DateTimeInterface
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param \DateTimeInterface $value
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

