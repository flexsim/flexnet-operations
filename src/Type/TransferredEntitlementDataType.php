<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferredEntitlementDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferredLineItemMapType
     */
    private $lineItemIdentifierMap;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\TransferredLineItemMapType|array $lineItemIdentifierMap
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, $lineItemIdentifierMap = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItemIdentifierMap = $lineItemIdentifierMap;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\TransferredLineItemMapType|array $lineItemIdentifierMap
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, $lineItemIdentifierMap = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier()
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @return $this
     */
    public function setEntitlementIdentifier($entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferredLineItemMapType
     */
    public function getLineItemIdentifierMap()
    {
        return $this->lineItemIdentifierMap;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferredLineItemMapType $lineItemIdentifierMap
     * @return $this
     */
    public function setLineItemIdentifierMap($lineItemIdentifierMap)
    {
        $this->lineItemIdentifierMap = $lineItemIdentifierMap;
        return $this;
    }


}

