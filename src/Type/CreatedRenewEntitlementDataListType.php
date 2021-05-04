<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedRenewEntitlementDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedRenewEntitlementDataType|array
     */
    private $entitlementData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedRenewEntitlementDataType|array $entitlementData
     */
    public function __construct($entitlementData = null)
    {
        $this->entitlementData = $entitlementData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedRenewEntitlementDataType|array $entitlementData
     */
    public static function create($entitlementData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedRenewEntitlementDataType|array
     */
    public function getEntitlementData()
    {
        return $this->entitlementData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedRenewEntitlementDataType|array $entitlementData
     * @return $this
     */
    public function setEntitlementData($entitlementData)
    {
        $this->entitlementData = $entitlementData;
        return $this;
    }
}
