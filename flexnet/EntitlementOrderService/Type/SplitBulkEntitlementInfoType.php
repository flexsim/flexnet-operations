<?php

namespace Flexnet\EntitlementOrderService\Type;

class SplitBulkEntitlementInfoType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $bulkEntIdentifier;

    /**
     * @var int
     */
    private $numberOfWRKs;

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
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    private $matchingBulkEntIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    private $matchingLineItemIdentifier;

    /**
     * Constructor
     */
    public function __construct(EntitlementIdentifierType $bulkEntIdentifier, int $numberOfWRKs, string $targetTierName, AccountIdentifierType $targetAccountUnit, UserIdentifierType $targetContact = null, EntitlementIdentifierType $matchingBulkEntIdentifier = null, EntitlementLineItemIdentifierType $matchingLineItemIdentifier = null)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
        $this->numberOfWRKs = $numberOfWRKs;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
        $this->targetContact = $targetContact;
        $this->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;
        $this->matchingLineItemIdentifier = $matchingLineItemIdentifier;
    }

    public static function create(EntitlementIdentifierType $bulkEntIdentifier, int $numberOfWRKs, string $targetTierName, AccountIdentifierType $targetAccountUnit, UserIdentifierType $targetContact = null, EntitlementIdentifierType $matchingBulkEntIdentifier = null, EntitlementLineItemIdentifierType $matchingLineItemIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntIdentifier(): EntitlementIdentifierType
    {
        return $this->bulkEntIdentifier;
    }

    public function withBulkEntIdentifier(EntitlementIdentifierType $bulkEntIdentifier): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->bulkEntIdentifier = $bulkEntIdentifier;

        return $new;
    }

    public function getNumberOfWRKs(): int
    {
        return $this->numberOfWRKs;
    }

    public function withNumberOfWRKs(int $numberOfWRKs): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->numberOfWRKs = $numberOfWRKs;

        return $new;
    }

    public function getTargetTierName(): string
    {
        return $this->targetTierName;
    }

    public function withTargetTierName(string $targetTierName): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->targetTierName = $targetTierName;

        return $new;
    }

    public function getTargetAccountUnit(): AccountIdentifierType
    {
        return $this->targetAccountUnit;
    }

    public function withTargetAccountUnit(AccountIdentifierType $targetAccountUnit): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->targetAccountUnit = $targetAccountUnit;

        return $new;
    }

    public function getTargetContact(): ?UserIdentifierType
    {
        return $this->targetContact;
    }

    public function withTargetContact(?UserIdentifierType $targetContact): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->targetContact = $targetContact;

        return $new;
    }

    public function getMatchingBulkEntIdentifier(): ?EntitlementIdentifierType
    {
        return $this->matchingBulkEntIdentifier;
    }

    public function withMatchingBulkEntIdentifier(?EntitlementIdentifierType $matchingBulkEntIdentifier): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;

        return $new;
    }

    public function getMatchingLineItemIdentifier(): ?EntitlementLineItemIdentifierType
    {
        return $this->matchingLineItemIdentifier;
    }

    public function withMatchingLineItemIdentifier(?EntitlementLineItemIdentifierType $matchingLineItemIdentifier): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->matchingLineItemIdentifier = $matchingLineItemIdentifier;

        return $new;
    }
}
