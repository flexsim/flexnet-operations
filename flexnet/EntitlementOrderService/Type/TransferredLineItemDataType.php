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
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $transferredFromId)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->transferredFromId = $transferredFromId;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $transferredFromId)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier): \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getTransferredFromId(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->transferredFromId;
    }

    public function withTransferredFromId(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $transferredFromId): \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType
    {
        $new = clone $this;
        $new->transferredFromId = $transferredFromId;

        return $new;
    }
}
