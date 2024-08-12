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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntIdentifier, string $targetTierName, \Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntIdentifier, string $targetTierName, \Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->bulkEntIdentifier;
    }

    public function withBulkEntIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntIdentifier): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType
    {
        $new = clone $this;
        $new->bulkEntIdentifier = $bulkEntIdentifier;

        return $new;
    }

    public function getTargetTierName(): string
    {
        return $this->targetTierName;
    }

    public function withTargetTierName(string $targetTierName): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType
    {
        $new = clone $this;
        $new->targetTierName = $targetTierName;

        return $new;
    }

    public function getTargetAccountUnit(): \Flexnet\EntitlementOrderService\Type\AccountIdentifierType
    {
        return $this->targetAccountUnit;
    }

    public function withTargetAccountUnit(\Flexnet\EntitlementOrderService\Type\AccountIdentifierType $targetAccountUnit): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType
    {
        $new = clone $this;
        $new->targetAccountUnit = $targetAccountUnit;

        return $new;
    }
}
