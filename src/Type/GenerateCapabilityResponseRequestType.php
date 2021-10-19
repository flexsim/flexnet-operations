<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateCapabilityResponseRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CapabilityRequestType
     */
    protected $device;

    /**
     * @var string
     */
    protected $request;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CapabilityRequestType|array $device
     * @param string|array $request
     */
    public function __construct($device = null, $request = null)
    {
        $this->device = $device;
        $this->request = $request;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CapabilityRequestType|array $device
     * @param string|array $request
     */
    public static function create($device = null, $request = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CapabilityRequestType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CapabilityRequestType $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param string $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
