<?php

namespace Flexnet\EntitlementOrderService\Type;

class SplitLineItemInfoType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var int
     */
    private $numberOfCopies;

    /**
     * @var string
     */
    private $targetTierName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AccountIdentifierType
     */
    private $targetAccountUnit;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null
     */
    private $targetContact;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    private $matchingLineItemIdentifier;

    /**
     * Constructor
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, string $targetTierName, AccountIdentifierType $targetAccountUnit, UserIdentifierType $targetContact = null, EntitlementLineItemIdentifierType $matchingLineItemIdentifier = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->numberOfCopies = $numberOfCopies;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
        $this->targetContact = $targetContact;
        $this->matchingLineItemIdentifier = $matchingLineItemIdentifier;
    }

    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, string $targetTierName, AccountIdentifierType $targetAccountUnit, UserIdentifierType $targetContact = null, EntitlementLineItemIdentifierType $matchingLineItemIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): SplitLineItemInfoType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getNumberOfCopies(): int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int $numberOfCopies): SplitLineItemInfoType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getTargetTierName(): string
    {
        return $this->targetTierName;
    }

    public function withTargetTierName(string $targetTierName): SplitLineItemInfoType
    {
        $new = clone $this;
        $new->targetTierName = $targetTierName;

        return $new;
    }

    public function getTargetAccountUnit(): AccountIdentifierType
    {
        return $this->targetAccountUnit;
    }

    public function withTargetAccountUnit(AccountIdentifierType $targetAccountUnit): SplitLineItemInfoType
    {
        $new = clone $this;
        $new->targetAccountUnit = $targetAccountUnit;

        return $new;
    }

    public function getTargetContact(): ?UserIdentifierType
    {
        return $this->targetContact;
    }

    public function withTargetContact(?UserIdentifierType $targetContact): SplitLineItemInfoType
    {
        $new = clone $this;
        $new->targetContact = $targetContact;

        return $new;
    }

    public function getMatchingLineItemIdentifier(): ?EntitlementLineItemIdentifierType
    {
        return $this->matchingLineItemIdentifier;
    }

    public function withMatchingLineItemIdentifier(?EntitlementLineItemIdentifierType $matchingLineItemIdentifier): SplitLineItemInfoType
    {
        $new = clone $this;
        $new->matchingLineItemIdentifier = $matchingLineItemIdentifier;

        return $new;
    }
}
