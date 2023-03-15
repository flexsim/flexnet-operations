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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $targetAccountUnit
     * @param  \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null  $targetContact
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $matchingLineItemIdentifier
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, string $targetTierName, AccountIdentifierType $targetAccountUnit, UserIdentifierType|null $targetContact = null, EntitlementLineItemIdentifierType|null $matchingLineItemIdentifier = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->numberOfCopies = $numberOfCopies;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
        $this->targetContact = $targetContact;
        $this->matchingLineItemIdentifier = $matchingLineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $targetAccountUnit
     * @param  \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null  $targetContact
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $matchingLineItemIdentifier
     */
    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, string $targetTierName, AccountIdentifierType $targetAccountUnit, UserIdentifierType|null $targetContact = null, EntitlementLineItemIdentifierType|null $matchingLineItemIdentifier = null)
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
     */
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

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AccountIdentifierType
     */
    public function getTargetAccountUnit(): AccountIdentifierType
    {
        return $this->targetAccountUnit;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $targetAccountUnit
     */
    public function withTargetAccountUnit(AccountIdentifierType $targetAccountUnit): SplitLineItemInfoType
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
     */
    public function withTargetContact(UserIdentifierType|null $targetContact): SplitLineItemInfoType
    {
        $new = clone $this;
        $new->targetContact = $targetContact;

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
     */
    public function withMatchingLineItemIdentifier(EntitlementLineItemIdentifierType|null $matchingLineItemIdentifier): SplitLineItemInfoType
    {
        $new = clone $this;
        $new->matchingLineItemIdentifier = $matchingLineItemIdentifier;

        return $new;
    }
}
