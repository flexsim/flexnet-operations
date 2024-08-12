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
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntIdentifier, int $numberOfWRKs, string $targetTierName, \Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit, ?\Flexnet\EntitlementOrderService\Type\UserIdentifierType $targetContact = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $matchingBulkEntIdentifier = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier = null)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
        $this->numberOfWRKs = $numberOfWRKs;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
        $this->targetContact = $targetContact;
        $this->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;
        $this->matchingLineItemIdentifier = $matchingLineItemIdentifier;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntIdentifier, int $numberOfWRKs, string $targetTierName, \Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit, ?\Flexnet\EntitlementOrderService\Type\UserIdentifierType $targetContact = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $matchingBulkEntIdentifier = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->bulkEntIdentifier;
    }

    public function withBulkEntIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntIdentifier): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->bulkEntIdentifier = $bulkEntIdentifier;

        return $new;
    }

    public function getNumberOfWRKs(): int
    {
        return $this->numberOfWRKs;
    }

    public function withNumberOfWRKs(int $numberOfWRKs): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->numberOfWRKs = $numberOfWRKs;

        return $new;
    }

    public function getTargetTierName(): string
    {
        return $this->targetTierName;
    }

    public function withTargetTierName(string $targetTierName): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->targetTierName = $targetTierName;

        return $new;
    }

    public function getTargetAccountUnit(): \Flexnet\EntitlementOrderService\Type\AccountIdentifierType
    {
        return $this->targetAccountUnit;
    }

    public function withTargetAccountUnit(\Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->targetAccountUnit = $targetAccountUnit;

        return $new;
    }

    public function getTargetContact(): ?\Flexnet\EntitlementOrderService\Type\UserIdentifierType
    {
        return $this->targetContact;
    }

    public function withTargetContact(?\Flexnet\EntitlementOrderService\Type\UserIdentifierType $targetContact): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->targetContact = $targetContact;

        return $new;
    }

    public function getMatchingBulkEntIdentifier(): ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->matchingBulkEntIdentifier;
    }

    public function withMatchingBulkEntIdentifier(?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $matchingBulkEntIdentifier): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;

        return $new;
    }

    public function getMatchingLineItemIdentifier(): ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->matchingLineItemIdentifier;
    }

    public function withMatchingLineItemIdentifier(?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->matchingLineItemIdentifier = $matchingLineItemIdentifier;

        return $new;
    }
}
