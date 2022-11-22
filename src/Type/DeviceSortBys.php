<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceSortBys extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceSortBy
     */
    protected $sortBy;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceSortBy  $sortBy
     */
    public function __construct(DeviceSortBy $sortBy)
    {
        $this->sortBy = $sortBy;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceSortBy  $sortBy
     */
    public static function create(DeviceSortBy $sortBy)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceSortBy
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DeviceSortBy  $sortBy
     * @return $this
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;

        return $this;
    }
}
