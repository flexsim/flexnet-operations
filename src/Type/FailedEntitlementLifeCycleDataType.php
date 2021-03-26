<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedEntitlementLifeCycleDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLifeCycleDataType
     */
    private $entitlementData;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLifeCycleDataType $entitlementData
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementLifeCycleDataType $entitlementData, string $reason)
    {
        $this->entitlementData = $entitlementData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLifeCycleDataType $entitlementData
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementLifeCycleDataType $entitlementData, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLifeCycleDataType
     */
    public function getEntitlementData()
    {
        return $this->entitlementData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLifeCycleDataType $entitlementData
     * @return $this
     */
    public function setEntitlementData($entitlementData)
    {
        $this->entitlementData = $entitlementData;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

