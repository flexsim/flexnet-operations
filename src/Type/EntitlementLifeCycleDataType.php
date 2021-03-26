<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementLifeCycleDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $parentEntitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType
     */
    private $lineItemData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType $lineItemData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier = null, \Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType $lineItemData)
    {
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        $this->lineItemData = $lineItemData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType $lineItemData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier = null, \Flexsim\FlexnetOperations\Type\LineItemLifeCycleDataType $lineItemData)
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

