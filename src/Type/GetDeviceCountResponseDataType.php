<?php

namespace Flexsim\FlexnetOperations\Type;

class GetDeviceCountResponseDataType
{

    /**
     * @var int
     */
    private $count;

    /**
     * Constructor
     *
     * @var int $count
     */
    public function __construct(int $count = null)
    {
        $this->count = $count;
    }

    /**
     * create a new instance of this class
     *
     * @var int $count
     */
    public static function create(int $count = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }


}

