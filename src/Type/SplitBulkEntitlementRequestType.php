<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SplitBulkEntitlementRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementListType
     */
    protected $bulkEntitlementList;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementListType $bulkEntitlementList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SplitBulkEntitlementListType $bulkEntitlementList)
    {
        $this->bulkEntitlementList = $bulkEntitlementList;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementListType $bulkEntitlementList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SplitBulkEntitlementListType $bulkEntitlementList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementListType
     */
    public function getBulkEntitlementList()
    {
        return $this->bulkEntitlementList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementListType $bulkEntitlementList
     * @return $this
     */
    public function setBulkEntitlementList($bulkEntitlementList)
    {
        $this->bulkEntitlementList = $bulkEntitlementList;
        return $this;
    }
}
