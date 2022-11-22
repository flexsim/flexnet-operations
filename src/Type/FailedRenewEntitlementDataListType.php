<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRenewEntitlementDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedRenewEntitlementDataType|array
     */
    protected $failedEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedRenewEntitlementDataType|array  $failedEntitlement
     */
    public function __construct($failedEntitlement = null)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedRenewEntitlementDataType|array  $failedEntitlement
     */
    public static function create($failedEntitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedRenewEntitlementDataType|array
     */
    public function getFailedEntitlement()
    {
        return $this->failedEntitlement;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedRenewEntitlementDataType|array  $failedEntitlement
     * @return $this
     */
    public function setFailedEntitlement($failedEntitlement)
    {
        $this->failedEntitlement = $failedEntitlement;

        return $this;
    }
}
