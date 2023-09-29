<?php

namespace Flexnet\EntitlementOrderService\Type;

class TransferredLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $transferredFromId;

    /**
     * Constructor
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, EntitlementLineItemIdentifierType $transferredFromId)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->transferredFromId = $transferredFromId;
    }

    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, EntitlementLineItemIdentifierType $transferredFromId)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): TransferredLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getTransferredFromId(): EntitlementLineItemIdentifierType
    {
        return $this->transferredFromId;
    }

    public function withTransferredFromId(EntitlementLineItemIdentifierType $transferredFromId): TransferredLineItemDataType
    {
        $new = clone $this;
        $new->transferredFromId = $transferredFromId;

        return $new;
    }
}
