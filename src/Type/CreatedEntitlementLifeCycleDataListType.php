<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedEntitlementLifeCycleDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedEntitlementLifeCycleDataType|array
     */
    protected $entitlementData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatedEntitlementLifeCycleDataType|array $entitlementData
     */
    public function __construct($entitlementData = null)
    {
        $this->entitlementData = $entitlementData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatedEntitlementLifeCycleDataType|array $entitlementData
     */
    public static function create($entitlementData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedEntitlementLifeCycleDataType|array
     */
    public function getEntitlementData()
    {
        return $this->entitlementData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedEntitlementLifeCycleDataType|array $entitlementData
     * @return $this
     */
    public function setEntitlementData($entitlementData)
    {
        $this->entitlementData = $entitlementData;
        return $this;
    }
}
