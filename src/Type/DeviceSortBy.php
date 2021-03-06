<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceSortBy extends FlexnetType
{
    /**
     * @var string
     */
    protected $sortKey;

    /**
     * @var bool
     */
    protected $ascending;

    /**
     * Constructor
     *
     * @param string $sortKey
     * @param bool $ascending
     */
    public function __construct(string $sortKey, bool $ascending)
    {
        $this->sortKey = $sortKey;
        $this->ascending = $ascending;
    }

    /**
     * create a new instance of this class
     *
     * @param string $sortKey
     * @param bool $ascending
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
