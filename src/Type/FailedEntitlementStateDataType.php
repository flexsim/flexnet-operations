<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedEntitlementStateDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateDataType
     */
    private $entitlement;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement, string $reason)
    {
        $this->entitlement = $entitlement;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementStateDataType
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement
     * @return $this
     */
    public function setEntitlement($entitlement)
    {
        $this->entitlement = $entitlement;
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

