<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateSimpleEntitlementDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateSimpleEntitlementDataType|array
     */
    protected $failedSimpleEntitlement;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateSimpleEntitlementDataType|array $failedSimpleEntitlement
     */
    public function __construct($failedSimpleEntitlement = null)
    {
        $this->failedSimpleEntitlement = $failedSimpleEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateSimpleEntitlementDataType|array $failedSimpleEntitlement
     */
    public static function create($failedSimpleEntitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateSimpleEntitlementDataType|array
     */
    public function getFailedSimpleEntitlement()
    {
        return $this->failedSimpleEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateSimpleEntitlementDataType|array $failedSimpleEntitlement
     * @return $this
     */
    public function setFailedSimpleEntitlement($failedSimpleEntitlement)
    {
        $this->failedSimpleEntitlement = $failedSimpleEntitlement;

        return $this;
    }
}
