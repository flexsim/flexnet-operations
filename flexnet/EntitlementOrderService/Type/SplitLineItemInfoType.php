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
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, string $targetTierName, \Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit, ?\Flexnet\EntitlementOrderService\Type\UserIdentifierType $targetContact = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->numberOfCopies = $numberOfCopies;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
        $this->targetContact = $targetContact;
        $this->matchingLineItemIdentifier = $matchingLineItemIdentifier;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, string $targetTierName, \Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit, ?\Flexnet\EntitlementOrderService\Type\UserIdentifierType $targetContact = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier): \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getNumberOfCopies(): int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int $numberOfCopies): \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getTargetTierName(): string
    {
        return $this->targetTierName;
    }

    public function withTargetTierName(string $targetTierName): \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType
    {
        $new = clone $this;
        $new->targetTierName = $targetTierName;

        return $new;
    }

    public function getTargetAccountUnit(): \Flexnet\EntitlementOrderService\Type\AccountIdentifierType
    {
        return $this->targetAccountUnit;
    }

    public function withTargetAccountUnit(\Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit): \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType
    {
        $new = clone $this;
        $new->targetAccountUnit = $targetAccountUnit;

        return $new;
    }

    public function getTargetContact(): ?\Flexnet\EntitlementOrderService\Type\UserIdentifierType
    {
        return $this->targetContact;
    }

    public function withTargetContact(?\Flexnet\EntitlementOrderService\Type\UserIdentifierType $targetContact): \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType
    {
        $new = clone $this;
        $new->targetContact = $targetContact;

        return $new;
    }

    public function getMatchingLineItemIdentifier(): ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->matchingLineItemIdentifier;
    }

    public function withMatchingLineItemIdentifier(?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier): \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType
    {
        $new = clone $this;
        $new->matchingLineItemIdentifier = $matchingLineItemIdentifier;

        return $new;
    }
}
