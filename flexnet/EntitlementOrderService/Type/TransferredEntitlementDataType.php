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
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType>|null  $lineItemIdentifierMap
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array|null $lineItemIdentifierMap = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItemIdentifierMap = $lineItemIdentifierMap;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType>|null  $lineItemIdentifierMap
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array|null $lineItemIdentifierMap = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier): \Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType>|null
     */
    public function getLineItemIdentifierMap(): \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array|null
    {
        return $this->lineItemIdentifierMap;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType>|null  $lineItemIdentifierMap
     */
    public function withLineItemIdentifierMap(\Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType|array|null $lineItemIdentifierMap): \Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType
    {
        $new = clone $this;
        $new->lineItemIdentifierMap = $lineItemIdentifierMap;

        return $new;
    }
}
