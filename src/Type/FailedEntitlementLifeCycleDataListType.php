<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedEntitlementLifeCycleDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedEntitlementLifeCycleDataType|array
     */
    protected $failedEntitlement;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedEntitlementLifeCycleDataType|array $failedEntitlement
     */
    public function __construct($failedEntitlement = null)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedEntitlementLifeCycleDataType|array $failedEntitlement
     */
    public static function create($failedEntitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedEntitlementLifeCycleDataType|array
     */
    public function getFailedEntitlement()
    {
        return $this->failedEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedEntitlementLifeCycleDataType|array $failedEntitlement
     * @return $this
     */
    public function setFailedEntitlement($failedEntitlement)
    {
        $this->failedEntitlement = $failedEntitlement;

        return $this;
    }
}
