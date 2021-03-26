<?php

namespace Flexsim\FlexnetOperations\Type;

class ExtraActivationDataType
{

    /**
     * @var int
     */
    private $allowedCount;

    /**
     * Constructor
     *
     * @var int $allowedCount
     */
    public function __construct(int $allowedCount)
    {
        $this->allowedCount = $allowedCount;
    }

    /**
     * create a new instance of this class
     *
     * @var int $allowedCount
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

