<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateDevRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateDevDataType
     */
    private $device;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateDevDataType $device
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateDevDataType $device)
    {
        $this->device = $device;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateDevDataType $device
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateDevDataType $device)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateDevDataType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateDevDataType $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }


}

