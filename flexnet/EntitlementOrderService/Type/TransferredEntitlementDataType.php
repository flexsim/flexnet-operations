<?php

namespace Flexnet\EntitlementOrderService\Type;

class TransferredEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType>|null
     */
    private $lineItemIdentifierMap;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType>|null  $lineItemIdentifierMap
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, TransferredLineItemMapType|array|null $lineItemIdentifierMap = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItemIdentifierMap = $lineItemIdentifierMap;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType>|null  $lineItemIdentifierMap
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, TransferredLineItemMapType|array|null $lineItemIdentifierMap = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @return TransferredEntitlementDataType
     */
    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): TransferredEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType>|null
     */
    public function getLineItemIdentifierMap(): TransferredLineItemMapType|array|null
    {
        return $this->lineItemIdentifierMap;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType>|null  $lineItemIdentifierMap
     * @return TransferredEntitlementDataType
     */
    public function withLineItemIdentifierMap(TransferredLineItemMapType|array|null $lineItemIdentifierMap): TransferredEntitlementDataType
    {
        $new = clone $this;
        $new->lineItemIdentifierMap = $lineItemIdentifierMap;

        return $new;
    }
}
