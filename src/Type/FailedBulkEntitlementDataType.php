<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedBulkEntitlementDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType
     */
    protected $bulkEntitlement;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType $bulkEntitlement
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType $bulkEntitlement = null, string $reason = null)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType $bulkEntitlement
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType $bulkEntitlement = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType
     */
    public function getBulkEntitlement()
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType $bulkEntitlement
     * @return $this
     */
    public function setBulkEntitlement($bulkEntitlement)
    {
        $this->bulkEntitlement = $bulkEntitlement;
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
