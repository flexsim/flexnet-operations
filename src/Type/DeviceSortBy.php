<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceSortBy
{

    /**
     * @var string
     */
    private $sortKey;

    /**
     * @var bool
     */
    private $ascending;

    /**
     * Constructor
     *
     * @var string $sortKey
     * @var bool $ascending
     */
    public function __construct(string $sortKey, bool $ascending)
    {
        $this->sortKey = $sortKey;
        $this->ascending = $ascending;
    }

    /**
     * create a new instance of this class
     *
     * @var string $sortKey
     * @var bool $ascending
     */
    public static function create(string $sortKey, bool $ascending)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getSortKey()
    {
        return $this->sortKey;
    }

    /**
     * @param string $sortKey
     * @return $this
     */
    public function setSortKey($sortKey)
    {
        $this->sortKey = $sortKey;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAscending()
    {
        return $this->ascending;
    }

    /**
     * @param bool $ascending
     * @return $this
     */
    public function setAscending($ascending)
    {
        $this->ascending = $ascending;
        return $this;
    }


}

