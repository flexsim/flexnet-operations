<?php

namespace Flexsim\FlexnetOperations\Type;

class SearchDevicesParametersType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $name;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $deviceId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType
     */
    protected $deviceIdType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceClassList
     */
    protected $deviceClasses;

    /**
     * @var bool
     */
    protected $hosted;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $parentId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $hostTypeName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $soldToAcctId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceStatusQueryType
     */
    protected $status;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $addOnEntitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $addOnActivationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $addOnProductName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $addOnProductVersion;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $addOnPartNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $featureName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $userString;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $name
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType
     * @param \Flexsim\FlexnetOperations\Type\DeviceClassList $deviceClasses
     * @param bool $hosted
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldToAcctId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @param \Flexsim\FlexnetOperations\Type\DeviceStatusQueryType $status
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnEntitlementId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnPartNumber
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $userString
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $name = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId = null, \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType = null, \Flexsim\FlexnetOperations\Type\DeviceClassList $deviceClasses = null, bool $hosted = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldToAcctId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\DeviceStatusQueryType $status = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnEntitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnPartNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $userString = null)
    {
        $this->name = $name;
        $this->deviceId = $deviceId;
        $this->deviceIdType = $deviceIdType;
        $this->deviceClasses = $deviceClasses;
        $this->hosted = $hosted;
        $this->parentId = $parentId;
        $this->hostTypeName = $hostTypeName;
        $this->soldTo = $soldTo;
        $this->soldToAcctId = $soldToAcctId;
        $this->description = $description;
        $this->status = $status;
        $this->addOnEntitlementId = $addOnEntitlementId;
        $this->addOnActivationId = $addOnActivationId;
        $this->addOnProductName = $addOnProductName;
        $this->addOnProductVersion = $addOnProductVersion;
        $this->addOnPartNumber = $addOnPartNumber;
        $this->featureName = $featureName;
        $this->userString = $userString;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $name
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType
     * @param \Flexsim\FlexnetOperations\Type\DeviceClassList $deviceClasses
     * @param bool $hosted
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldToAcctId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @param \Flexsim\FlexnetOperations\Type\DeviceStatusQueryType $status
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnEntitlementId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnPartNumber
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $userString
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $name = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId = null, \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType = null, \Flexsim\FlexnetOperations\Type\DeviceClassList $deviceClasses = null, bool $hosted = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldToAcctId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\DeviceStatusQueryType $status = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnEntitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnPartNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $userString = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType
     */
    public function getDeviceIdType()
    {
        return $this->deviceIdType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType
     * @return $this
     */
    public function setDeviceIdType($deviceIdType)
    {
        $this->deviceIdType = $deviceIdType;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceClassList
     */
    public function getDeviceClasses()
    {
        return $this->deviceClasses;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceClassList $deviceClasses
     * @return $this
     */
    public function setDeviceClasses($deviceClasses)
    {
        $this->deviceClasses = $deviceClasses;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHosted()
    {
        return $this->hosted;
    }

    /**
     * @param bool $hosted
     * @return $this
     */
    public function setHosted($hosted)
    {
        $this->hosted = $hosted;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getHostTypeName()
    {
        return $this->hostTypeName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName
     * @return $this
     */
    public function setHostTypeName($hostTypeName)
    {
        $this->hostTypeName = $hostTypeName;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getSoldToAcctId()
    {
        return $this->soldToAcctId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldToAcctId
     * @return $this
     */
    public function setSoldToAcctId($soldToAcctId)
    {
        $this->soldToAcctId = $soldToAcctId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceStatusQueryType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceStatusQueryType $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAddOnEntitlementId()
    {
        return $this->addOnEntitlementId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnEntitlementId
     * @return $this
     */
    public function setAddOnEntitlementId($addOnEntitlementId)
    {
        $this->addOnEntitlementId = $addOnEntitlementId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAddOnActivationId()
    {
        return $this->addOnActivationId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId
     * @return $this
     */
    public function setAddOnActivationId($addOnActivationId)
    {
        $this->addOnActivationId = $addOnActivationId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAddOnProductName()
    {
        return $this->addOnProductName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName
     * @return $this
     */
    public function setAddOnProductName($addOnProductName)
    {
        $this->addOnProductName = $addOnProductName;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAddOnProductVersion()
    {
        return $this->addOnProductVersion;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion
     * @return $this
     */
    public function setAddOnProductVersion($addOnProductVersion)
    {
        $this->addOnProductVersion = $addOnProductVersion;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAddOnPartNumber()
    {
        return $this->addOnPartNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnPartNumber
     * @return $this
     */
    public function setAddOnPartNumber($addOnPartNumber)
    {
        $this->addOnPartNumber = $addOnPartNumber;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getFeatureName()
    {
        return $this->featureName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @return $this
     */
    public function setFeatureName($featureName)
    {
        $this->featureName = $featureName;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getUserString()
    {
        return $this->userString;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $userString
     * @return $this
     */
    public function setUserString($userString)
    {
        $this->userString = $userString;

        return $this;
    }
}
