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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $transferredFromId
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, EntitlementLineItemIdentifierType $transferredFromId)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->transferredFromId = $transferredFromId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $transferredFromId
     */
    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, EntitlementLineItemIdentifierType $transferredFromId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @return TransferredLineItemDataType
     */
    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): TransferredLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    public function getTransferredFromId(): EntitlementLineItemIdentifierType
    {
        return $this->transferredFromId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $transferredFromId
     * @return TransferredLineItemDataType
     */
    public function withTransferredFromId(EntitlementLineItemIdentifierType $transferredFromId): TransferredLineItemDataType
    {
        $new = clone $this;
        $new->transferredFromId = $transferredFromId;

        return $new;
    }
}
