<?php

namespace Flexnet\EntitlementOrderService\Type;

class GetMatchingLineItemInfoType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var string
     */
    private $targetTierName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AccountIdentifierType
     */
    private $targetAccountUnit;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, string $targetTierName, \Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, string $targetTierName, \Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier): \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getTargetTierName(): string
    {
        return $this->targetTierName;
    }

    public function withTargetTierName(string $targetTierName): \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType
    {
        $new = clone $this;
        $new->targetTierName = $targetTierName;

        return $new;
    }

    public function getTargetAccountUnit(): \Flexnet\EntitlementOrderService\Type\AccountIdentifierType
    {
        return $this->targetAccountUnit;
    }

    public function withTargetAccountUnit(\Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit): \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType
    {
        $new = clone $this;
        $new->targetAccountUnit = $targetAccountUnit;

        return $new;
    }
}
