<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedGeneratePrebuiltLicenseDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedGeneratePrebuiltLicenseDataType|array 
     */
    protected $failedDevice;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedGeneratePrebuiltLicenseDataType|array $failedDevice
     */
    public function __construct($failedDevice = null)
    {
        $this->failedDevice = $failedDevice;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedGeneratePrebuiltLicenseDataType|array $failedDevice
     */
    public static function create($failedDevice = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedGeneratePrebuiltLicenseDataType|array 
     */
    public function getFailedDevice()
    {
        return $this->failedDevice;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedGeneratePrebuiltLicenseDataType|array $failedDevice
     * @return $this
     */
    public function setFailedDevice($failedDevice)
    {
        $this->failedDevice = $failedDevice;
        return $this;
    }
}
