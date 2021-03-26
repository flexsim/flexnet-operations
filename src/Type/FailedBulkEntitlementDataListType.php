<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedBulkEntitlementDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedBulkEntitlementDataType
     */
    private $failedBulkEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedBulkEntitlementDataType|array $failedBulkEntitlement
     */
    public function __construct($failedBulkEntitlement = null)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedBulkEntitlementDataType|array $failedBulkEntitlement
     */
    public static function create($failedBulkEntitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedBulkEntitlementDataType
     */
    public function getFailedBulkEntitlement()
    {
        return $this->failedBulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedBulkEntitlementDataType $failedBulkEntitlement
     * @return $this
     */
    public function setFailedBulkEntitlement($failedBulkEntitlement)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
        return $this;
    }


}

