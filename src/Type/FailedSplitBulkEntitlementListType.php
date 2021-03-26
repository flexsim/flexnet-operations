<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSplitBulkEntitlementListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType
     */
    private $failedBulkEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType $failedBulkEntitlement
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType $failedBulkEntitlement)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType $failedBulkEntitlement
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType $failedBulkEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType
     */
    public function getFailedBulkEntitlement()
    {
        return $this->failedBulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType $failedBulkEntitlement
     * @return $this
     */
    public function setFailedBulkEntitlement($failedBulkEntitlement)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
        return $this;
    }


}

