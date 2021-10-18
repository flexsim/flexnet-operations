<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSimpleEntitlementDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSimpleEntitlementDataType|array 
     */
    protected $failedSimpleEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSimpleEntitlementDataType|array $failedSimpleEntitlement
     */
    public function __construct($failedSimpleEntitlement = null)
    {
        $this->failedSimpleEntitlement = $failedSimpleEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSimpleEntitlementDataType|array $failedSimpleEntitlement
     */
    public static function create($failedSimpleEntitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedSimpleEntitlementDataType|array 
     */
    public function getFailedSimpleEntitlement()
    {
        return $this->failedSimpleEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedSimpleEntitlementDataType|array $failedSimpleEntitlement
     * @return $this
     */
    public function setFailedSimpleEntitlement($failedSimpleEntitlement)
    {
        $this->failedSimpleEntitlement = $failedSimpleEntitlement;
        return $this;
    }
}
