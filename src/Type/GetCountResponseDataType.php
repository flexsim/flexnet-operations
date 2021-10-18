<?php

namespace Flexsim\FlexnetOperations\Type;

class GetCountResponseDataType extends FlexnetType
{

    /**
     * @var int
     */
    protected $count;

    /**
     * Constructor
     *
     * @var int $count
     */
    public function __construct(int $count)
    {
        $this->count = $count;
    }

    /**
     * create a new instance of this class
     *
     * @var int $count
     */
    public static function create(int $count)
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
