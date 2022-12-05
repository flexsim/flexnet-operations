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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  string  $targetTierName
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $targetAccountUnit
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, string $targetTierName, AccountIdentifierType $targetAccountUnit)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  string  $targetTierName
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $targetAccountUnit
     */
    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, string $targetTierName, AccountIdentifierType $targetAccountUnit)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): GetMatchingLineItemInfoType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getTargetTierName(): string
    {
        return $this->targetTierName;
    }

    public function withTargetTierName(string $targetTierName): GetMatchingLineItemInfoType
    {
        $new = clone $this;
        $new->targetTierName = $targetTierName;

        return $new;
    }

    public function getTargetAccountUnit(): AccountIdentifierType
    {
        return $this->targetAccountUnit;
    }

    public function withTargetAccountUnit(AccountIdentifierType $targetAccountUnit): GetMatchingLineItemInfoType
    {
        $new = clone $this;
        $new->targetAccountUnit = $targetAccountUnit;

        return $new;
    }
}
