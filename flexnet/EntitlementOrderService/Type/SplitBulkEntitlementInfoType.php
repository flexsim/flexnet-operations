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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntIdentifier
     * @param  int  $numberOfWRKs
     * @param  string  $targetTierName
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $targetAccountUnit
     * @param  \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null  $targetContact
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $matchingBulkEntIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $matchingLineItemIdentifier
     */
    public function __construct(EntitlementIdentifierType $bulkEntIdentifier, int $numberOfWRKs, string $targetTierName, AccountIdentifierType $targetAccountUnit, UserIdentifierType|null $targetContact = null, EntitlementIdentifierType|null $matchingBulkEntIdentifier = null, EntitlementLineItemIdentifierType|null $matchingLineItemIdentifier = null)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
        $this->numberOfWRKs = $numberOfWRKs;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
        $this->targetContact = $targetContact;
        $this->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;
        $this->matchingLineItemIdentifier = $matchingLineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntIdentifier
     * @param  int  $numberOfWRKs
     * @param  string  $targetTierName
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $targetAccountUnit
     * @param  \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null  $targetContact
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $matchingBulkEntIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $matchingLineItemIdentifier
     */
    public static function create(EntitlementIdentifierType $bulkEntIdentifier, int $numberOfWRKs, string $targetTierName, AccountIdentifierType $targetAccountUnit, UserIdentifierType|null $targetContact = null, EntitlementIdentifierType|null $matchingBulkEntIdentifier = null, EntitlementLineItemIdentifierType|null $matchingLineItemIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    public function getBulkEntIdentifier(): EntitlementIdentifierType
    {
        return $this->bulkEntIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntIdentifier
     * @return SplitBulkEntitlementInfoType
     */
    public function withBulkEntIdentifier(EntitlementIdentifierType $bulkEntIdentifier): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->bulkEntIdentifier = $bulkEntIdentifier;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfWRKs(): int
    {
        return $this->numberOfWRKs;
    }

    /**
     * @param  int  $numberOfWRKs
     * @return SplitBulkEntitlementInfoType
     */
    public function withNumberOfWRKs(int $numberOfWRKs): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->numberOfWRKs = $numberOfWRKs;

        return $new;
    }

    /**
     * @return string
     */
    public function getTargetTierName(): string
    {
        return $this->targetTierName;
    }

    /**
     * @param  string  $targetTierName
     * @return SplitBulkEntitlementInfoType
     */
    public function withTargetTierName(string $targetTierName): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->targetTierName = $targetTierName;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AccountIdentifierType
     */
    public function getTargetAccountUnit(): AccountIdentifierType
    {
        return $this->targetAccountUnit;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $targetAccountUnit
     * @return SplitBulkEntitlementInfoType
     */
    public function withTargetAccountUnit(AccountIdentifierType $targetAccountUnit): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->targetAccountUnit = $targetAccountUnit;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null
     */
    public function getTargetContact(): UserIdentifierType|null
    {
        return $this->targetContact;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null  $targetContact
     * @return SplitBulkEntitlementInfoType
     */
    public function withTargetContact(UserIdentifierType|null $targetContact): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->targetContact = $targetContact;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    public function getMatchingBulkEntIdentifier(): EntitlementIdentifierType|null
    {
        return $this->matchingBulkEntIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $matchingBulkEntIdentifier
     * @return SplitBulkEntitlementInfoType
     */
    public function withMatchingBulkEntIdentifier(EntitlementIdentifierType|null $matchingBulkEntIdentifier): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    public function getMatchingLineItemIdentifier(): EntitlementLineItemIdentifierType|null
    {
        return $this->matchingLineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $matchingLineItemIdentifier
     * @return SplitBulkEntitlementInfoType
     */
    public function withMatchingLineItemIdentifier(EntitlementLineItemIdentifierType|null $matchingLineItemIdentifier): SplitBulkEntitlementInfoType
    {
        $new = clone $this;
        $new->matchingLineItemIdentifier = $matchingLineItemIdentifier;

        return $new;
    }
}
