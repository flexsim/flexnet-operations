<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSimpleEntitlementDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType
     */
    private $simpleEntitlement;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement = null, string $reason = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType
     */
    public function getSimpleEntitlement()
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement
     * @return $this
     */
    public function setSimpleEntitlement($simpleEntitlement)
    {
        $this->simpleEntitlement = $simpleEntitlement;
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

