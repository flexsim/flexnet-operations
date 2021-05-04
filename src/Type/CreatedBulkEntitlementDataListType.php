<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedBulkEntitlementDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedBulkEntitlementDataType|array
     */
    private $createdBulkEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedBulkEntitlementDataType|array $createdBulkEntitlement
     */
    public function __construct($createdBulkEntitlement = null)
    {
        $this->createdBulkEntitlement = $createdBulkEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedBulkEntitlementDataType|array $createdBulkEntitlement
     */
    public static function create($createdBulkEntitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedBulkEntitlementDataType|array
     */
    public function getCreatedBulkEntitlement()
    {
        return $this->createdBulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedBulkEntitlementDataType|array $createdBulkEntitlement
     * @return $this
     */
    public function setCreatedBulkEntitlement($createdBulkEntitlement)
    {
        $this->createdBulkEntitlement = $createdBulkEntitlement;
        return $this;
    }
}
