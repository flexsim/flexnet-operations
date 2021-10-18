<?php

namespace Flexsim\FlexnetOperations\Type;

class CapabilityResponseDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $deviceIdentifier;

    /**
     * @var string
     */
    protected $addonLicense;

    /**
     * @var bool
     */
    protected $bufferLicense;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var string $addonLicense
     * @var bool $bufferLicense
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier, string $addonLicense, bool $bufferLicense = null)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        $this->addonLicense = $addonLicense;
        $this->bufferLicense = $bufferLicense;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var string $addonLicense
     * @var bool $bufferLicense
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier, string $addonLicense, bool $bufferLicense = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddonLicense()
    {
        return $this->addonLicense;
    }

    /**
     * @param string $addonLicense
     * @return $this
     */
    public function setAddonLicense($addonLicense)
    {
        $this->addonLicense = $addonLicense;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBufferLicense()
    {
        return $this->bufferLicense;
    }

    /**
     * @param bool $bufferLicense
     * @return $this
     */
    public function setBufferLicense($bufferLicense)
    {
        $this->bufferLicense = $bufferLicense;
        return $this;
    }
}
