<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSplitBulkEntitlementDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType
     */
    protected $bulkEntitlementInfo;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType  $bulkEntitlementInfo
     * @param  string  $reason
     */
    public function __construct(SplitBulkEntitlementInfoType $bulkEntitlementInfo, string $reason)
    {
        $this->bulkEntitlementInfo = $bulkEntitlementInfo;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType  $bulkEntitlementInfo
     * @param  string  $reason
     */
    public static function create(SplitBulkEntitlementInfoType $bulkEntitlementInfo, string $reason)
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
     * @param  \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType  $bulkEntitlementInfo
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
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
