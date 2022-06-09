<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUsageHistoryConfigType extends FlexnetType
{
    /**
     * @var bool
     */
    protected $server;

    /**
     * @var bool
     */
    protected $features;

    /**
     * @var bool
     */
    protected $machineType;

    /**
     * @var bool
     */
    protected $vmDetails;

    /**
     * @var bool
     */
    protected $vmInfo;

    /**
     * @var bool
     */
    protected $vendorDictionary;

    /**
     * Constructor
     *
     * @param bool $server
     * @param bool $features
     * @param bool $machineType
     * @param bool $vmDetails
     * @param bool $vmInfo
     * @param bool $vendorDictionary
     */
    public function __construct(bool $server = null, bool $features = null, bool $machineType = null, bool $vmDetails = null, bool $vmInfo = null, bool $vendorDictionary = null)
    {
        $this->server = $server;
        $this->features = $features;
        $this->machineType = $machineType;
        $this->vmDetails = $vmDetails;
        $this->vmInfo = $vmInfo;
        $this->vendorDictionary = $vendorDictionary;
    }

    /**
     * create a new instance of this class
     *
     * @param bool $server
     * @param bool $features
     * @param bool $machineType
     * @param bool $vmDetails
     * @param bool $vmInfo
     * @param bool $vendorDictionary
     */
    public static function create(bool $server = null, bool $features = null, bool $machineType = null, bool $vmDetails = null, bool $vmInfo = null, bool $vendorDictionary = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param bool $server
     * @return $this
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * @return bool
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param bool $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMachineType()
    {
        return $this->machineType;
    }

    /**
     * @param bool $machineType
     * @return $this
     */
    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;

        return $this;
    }

    /**
     * @return bool
     */
    public function getVmDetails()
    {
        return $this->vmDetails;
    }

    /**
     * @param bool $vmDetails
     * @return $this
     */
    public function setVmDetails($vmDetails)
    {
        $this->vmDetails = $vmDetails;

        return $this;
    }

    /**
     * @return bool
     */
    public function getVmInfo()
    {
        return $this->vmInfo;
    }

    /**
     * @param bool $vmInfo
     * @return $this
     */
    public function setVmInfo($vmInfo)
    {
        $this->vmInfo = $vmInfo;

        return $this;
    }

    /**
     * @return bool
     */
    public function getVendorDictionary()
    {
        return $this->vendorDictionary;
    }

    /**
     * @param bool $vendorDictionary
     * @return $this
     */
    public function setVendorDictionary($vendorDictionary)
    {
        $this->vendorDictionary = $vendorDictionary;

        return $this;
    }
}
