<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateDevRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateDevDataType
     */
    protected $device;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateDevDataType  $device
     */
    public function __construct(UpdateDevDataType $device)
    {
        $this->device = $device;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateDevDataType  $device
     */
    public static function create(UpdateDevDataType $device)
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
     * @param  \Flexsim\FlexnetOperations\Type\UpdateDevDataType  $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }
}
