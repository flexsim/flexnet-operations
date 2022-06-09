<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateBulkEntitlementDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateBulkEntitlementDataType|array
     */
    protected $failedBulkEntitlement;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateBulkEntitlementDataType|array $failedBulkEntitlement
     */
    public function __construct($failedBulkEntitlement = null)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateBulkEntitlementDataType|array $failedBulkEntitlement
     */
    public static function create($failedBulkEntitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateBulkEntitlementDataType|array
     */
    public function getFailedBulkEntitlement()
    {
        return $this->failedBulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateBulkEntitlementDataType|array $failedBulkEntitlement
     * @return $this
     */
    public function setFailedBulkEntitlement($failedBulkEntitlement)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;

        return $this;
    }
}
