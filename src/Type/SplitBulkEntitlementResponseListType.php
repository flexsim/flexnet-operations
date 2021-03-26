<?php

namespace Flexsim\FlexnetOperations\Type;

class SplitBulkEntitlementResponseListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType
     */
    private $splitBulkEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType $splitBulkEntitlement
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType $splitBulkEntitlement)
    {
        $this->splitBulkEntitlement = $splitBulkEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType $splitBulkEntitlement
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType $splitBulkEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType
     */
    public function getSplitBulkEntitlement()
    {
        return $this->splitBulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType $splitBulkEntitlement
     * @return $this
     */
    public function setSplitBulkEntitlement($splitBulkEntitlement)
    {
        $this->splitBulkEntitlement = $splitBulkEntitlement;
        return $this;
    }


}

