<?php

namespace Flexnet\EntitlementOrderService\Type;

class GetMatchingBulkEntInfoType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $bulkEntIdentifier;

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
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $targetAccountUnit
     */
    public function __construct(EntitlementIdentifierType $bulkEntIdentifier, string $targetTierName, AccountIdentifierType $targetAccountUnit)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $targetAccountUnit
     */
    public static function create(EntitlementIdentifierType $bulkEntIdentifier, string $targetTierName, AccountIdentifierType $targetAccountUnit)
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
     */
    public function withBulkEntIdentifier(EntitlementIdentifierType $bulkEntIdentifier): GetMatchingBulkEntInfoType
    {
        $new = clone $this;
        $new->bulkEntIdentifier = $bulkEntIdentifier;

        return $new;
    }

    public function getTargetTierName(): string
    {
        return $this->targetTierName;
    }

    public function withTargetTierName(string $targetTierName): GetMatchingBulkEntInfoType
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
    public function withTargetAccountUnit(AccountIdentifierType $targetAccountUnit): GetMatchingBulkEntInfoType
    {
        $new = clone $this;
        $new->targetAccountUnit = $targetAccountUnit;

        return $new;
    }
}
