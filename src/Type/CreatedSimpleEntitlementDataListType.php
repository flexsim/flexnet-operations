<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedSimpleEntitlementDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedSimpleEntitlementDataType|array
     */
    protected $createdSimpleEntitlement;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatedSimpleEntitlementDataType|array $createdSimpleEntitlement
     */
    public function __construct($createdSimpleEntitlement = null)
    {
        $this->createdSimpleEntitlement = $createdSimpleEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatedSimpleEntitlementDataType|array $createdSimpleEntitlement
     */
    public static function create($createdSimpleEntitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedSimpleEntitlementDataType|array
     */
    public function getCreatedSimpleEntitlement()
    {
        return $this->createdSimpleEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedSimpleEntitlementDataType|array $createdSimpleEntitlement
     * @return $this
     */
    public function setCreatedSimpleEntitlement($createdSimpleEntitlement)
    {
        $this->createdSimpleEntitlement = $createdSimpleEntitlement;

        return $this;
    }
}
