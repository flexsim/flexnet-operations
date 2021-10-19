<?php

namespace Flexsim\FlexnetOperations\Type;

class ExtraActivationDataType extends FlexnetType
{

    /**
     * @var int
     */
    protected $allowedCount;

    /**
     * Constructor
     *
     * @param int $allowedCount
     */
    public function __construct(int $allowedCount)
    {
        $this->allowedCount = $allowedCount;
    }

    /**
     * create a new instance of this class
     *
     * @param int $allowedCount
     */
    public static function create(int $allowedCount)
    {
        return new self(...func_get_args());
    }

    /**
     * @return int
     */
    public function getAllowedCount()
    {
        return $this->allowedCount;
    }

    /**
     * @param int $allowedCount
     * @return $this
     */
    public function setAllowedCount($allowedCount)
    {
        $this->allowedCount = $allowedCount;
        return $this;
    }
}
