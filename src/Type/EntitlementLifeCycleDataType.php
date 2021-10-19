<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementLifeCycleDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $parentEntitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType
     */
    protected $lineItemData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType $lineItemData
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType $lineItemData, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier = null)
    {
        $this->lineItemData = $lineItemData;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType $lineItemData
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType $lineItemData, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier = null)
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
     * @return \Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType
     */
    public function getLineItemData()
    {
        return $this->lineItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType $lineItemData
     * @return $this
     */
    public function setLineItemData($lineItemData)
    {
        $this->lineItemData = $lineItemData;
        return $this;
    }
}
