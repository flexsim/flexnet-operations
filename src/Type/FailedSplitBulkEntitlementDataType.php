<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSplitBulkEntitlementDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType
     */
    private $bulkEntitlementInfo;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo, string $reason)
    {
        $this->bulkEntitlementInfo = $bulkEntitlementInfo;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType
     */
    public function getBulkEntitlementInfo()
    {
        return $this->bulkEntitlementInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo
     * @return $this
     */
    public function setBulkEntitlementInfo($bulkEntitlementInfo)
    {
        $this->bulkEntitlementInfo = $bulkEntitlementInfo;
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

