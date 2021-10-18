<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUsageResponse extends FlexnetType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfoType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\Usage
     */
    protected $usages;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfoType
     * @var \Flexsim\FlexnetOperations\Type\Usage $usages
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfoType, \Flexsim\FlexnetOperations\Type\Usage $usages)
    {
        $this->statusInfoType = $statusInfoType;
        $this->usages = $usages;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfoType
     * @var \Flexsim\FlexnetOperations\Type\Usage $usages
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfoType, \Flexsim\FlexnetOperations\Type\Usage $usages)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    public function getStatusInfoType()
    {
        return $this->statusInfoType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfoType
     * @return $this
     */
    public function setStatusInfoType($statusInfoType)
    {
        $this->statusInfoType = $statusInfoType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\Usage
     */
    public function getUsages()
    {
        return $this->usages;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\Usage $usages
     * @return $this
     */
    public function setUsages($usages)
    {
        $this->usages = $usages;
        return $this;
    }
}
