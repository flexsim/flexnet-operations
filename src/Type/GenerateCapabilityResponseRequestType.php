<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateCapabilityResponseRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CapabilityRequestType
     */
    private $device;

    /**
     * @var string
     */
    private $request;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CapabilityRequestType|array $device
     * @var string|array $request
     */
    public function __construct($device = null, $request = null)
    {
        $this->device = $device;
        $this->request = $request;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CapabilityRequestType|array $device
     * @var string|array $request
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
