<?php

namespace Flexsim\FlexnetOperations\Type;

class RenewEntitlementDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $parentEntitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\RenewLineItemDataType
     */
    protected $renewLineItemData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     * @param \Flexsim\FlexnetOperations\Type\RenewLineItemDataType $renewLineItemData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier = null, \Flexsim\FlexnetOperations\Type\RenewLineItemDataType $renewLineItemData)
    {
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        $this->renewLineItemData = $renewLineItemData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     * @param \Flexsim\FlexnetOperations\Type\RenewLineItemDataType $renewLineItemData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier = null, \Flexsim\FlexnetOperations\Type\RenewLineItemDataType $renewLineItemData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getParentEntitlementIdentifier()
    {
        return $this->parentEntitlementIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     * @return $this
     */
    public function setParentEntitlementIdentifier($parentEntitlementIdentifier)
    {
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RenewLineItemDataType
     */
    public function getRenewLineItemData()
    {
        return $this->renewLineItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RenewLineItemDataType $renewLineItemData
     * @return $this
     */
    public function setRenewLineItemData($renewLineItemData)
    {
        $this->renewLineItemData = $renewLineItemData;
        return $this;
    }
}
