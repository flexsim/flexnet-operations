<?php

namespace Flexsim\FlexnetOperations\Type;

class RemoveEntitlementLineItemDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $lineItemIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, $lineItemIdentifier = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItemIdentifier = $lineItemIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $lineItemIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, $lineItemIdentifier = null)
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
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItemIdentifier()
    {
        return $this->lineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @return $this
     */
    public function setLineItemIdentifier($lineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        return $this;
    }


}

