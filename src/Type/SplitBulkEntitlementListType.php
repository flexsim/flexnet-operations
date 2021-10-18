<?php

namespace Flexsim\FlexnetOperations\Type;

class SplitBulkEntitlementListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType|array 
     */
    protected $bulkEntitlementInfo;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType|array $bulkEntitlementInfo
     */
    public function __construct($bulkEntitlementInfo)
    {
        $this->bulkEntitlementInfo = $bulkEntitlementInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType|array $bulkEntitlementInfo
     */
    public static function create($bulkEntitlementInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType|array 
     */
    public function getBulkEntitlementInfo()
    {
        return $this->bulkEntitlementInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementInfoType|array $bulkEntitlementInfo
     * @return $this
     */
    public function setBulkEntitlementInfo($bulkEntitlementInfo)
    {
        $this->bulkEntitlementInfo = $bulkEntitlementInfo;
        return $this;
    }
}
