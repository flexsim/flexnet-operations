<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedEntitlementStateDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateDataType
     */
    protected $entitlement;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement, string $reason)
    {
        $this->entitlement = $entitlement;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement
     * @param string $reason
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
