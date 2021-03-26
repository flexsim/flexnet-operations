<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateBulkEntitlementDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementDataType
     */
    private $bulkEntitlement;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementDataType $bulkEntitlement
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementDataType $bulkEntitlement = null, string $reason = null)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementDataType $bulkEntitlement
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementDataType $bulkEntitlement = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementDataType
     */
    public function getBulkEntitlement()
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementDataType $bulkEntitlement
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

