<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleEntitlementDataType
     */
    protected $simpleEntitlement;

    /**
     * @var \Flexsim\FlexnetOperations\Type\BulkEntitlementDataType
     */
    protected $bulkEntitlement;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleEntitlementDataType $simpleEntitlement
     * @param \Flexsim\FlexnetOperations\Type\BulkEntitlementDataType $bulkEntitlement
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleEntitlementDataType $simpleEntitlement = null, \Flexsim\FlexnetOperations\Type\BulkEntitlementDataType $bulkEntitlement = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->bulkEntitlement = $bulkEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleEntitlementDataType $simpleEntitlement
     * @param \Flexsim\FlexnetOperations\Type\BulkEntitlementDataType $bulkEntitlement
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleEntitlementDataType $simpleEntitlement = null, \Flexsim\FlexnetOperations\Type\BulkEntitlementDataType $bulkEntitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleEntitlementDataType
     */
    public function getSimpleEntitlement()
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleEntitlementDataType $simpleEntitlement
     * @return $this
     */
    public function setSimpleEntitlement($simpleEntitlement)
    {
        $this->simpleEntitlement = $simpleEntitlement;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\BulkEntitlementDataType
     */
    public function getBulkEntitlement()
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\BulkEntitlementDataType $bulkEntitlement
     * @return $this
     */
    public function setBulkEntitlement($bulkEntitlement)
    {
        $this->bulkEntitlement = $bulkEntitlement;

        return $this;
    }
}
