<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferredLineItemDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $transferredFromId;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $transferredFromId
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $transferredFromId)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->transferredFromId = $transferredFromId;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $transferredFromId
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $transferredFromId)
    {
        return new self(...func_get_args());
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

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getTransferredFromId()
    {
        return $this->transferredFromId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $transferredFromId
     * @return $this
     */
    public function setTransferredFromId($transferredFromId)
    {
        $this->transferredFromId = $transferredFromId;
        return $this;
    }


}

