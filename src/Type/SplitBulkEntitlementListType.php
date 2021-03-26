<?php

namespace Flexsim\FlexnetOperations\Type;

class SplitBulkEntitlementListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType
     */
    private $bulkEntitlementInfo;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo)
    {
        $this->bulkEntitlementInfo = $bulkEntitlementInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo)
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


}

