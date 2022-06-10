<?php

namespace Flexsim\FlexnetOperations\Type;

class SplitBulkEntitlementResponseListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType|array
     */
    protected $splitBulkEntitlement;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType|array $splitBulkEntitlement
     */
    public function __construct($splitBulkEntitlement)
    {
        $this->splitBulkEntitlement = $splitBulkEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType|array $splitBulkEntitlement
     */
    public static function create($splitBulkEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType|array
     */
    public function getSplitBulkEntitlement()
    {
        return $this->splitBulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementDataType|array $splitBulkEntitlement
     * @return $this
     */
    public function setSplitBulkEntitlement($splitBulkEntitlement)
    {
        $this->splitBulkEntitlement = $splitBulkEntitlement;

        return $this;
    }
}
