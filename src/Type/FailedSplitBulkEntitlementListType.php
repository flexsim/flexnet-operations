<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSplitBulkEntitlementListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType|array
     */
    protected $failedBulkEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType|array  $failedBulkEntitlement
     */
    public function __construct($failedBulkEntitlement)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType|array  $failedBulkEntitlement
     */
    public static function create($failedBulkEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType|array
     */
    public function getFailedBulkEntitlement()
    {
        return $this->failedBulkEntitlement;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementDataType|array  $failedBulkEntitlement
     * @return $this
     */
    public function setFailedBulkEntitlement($failedBulkEntitlement)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;

        return $this;
    }
}
