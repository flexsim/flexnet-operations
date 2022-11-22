<?php

namespace Flexsim\FlexnetOperations\Type;

class GetDeviceCountResponseDataType extends FlexnetType
{
    /**
     * @var int
     */
    protected $count;

    /**
     * Constructor
     *
     * @param  int  $count
     */
    public function __construct(int $count = null)
    {
        $this->count = $count;
    }

    /**
     * create a new instance of this class
     *
     * @param  int  $count
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
     * @param  int  $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
}
