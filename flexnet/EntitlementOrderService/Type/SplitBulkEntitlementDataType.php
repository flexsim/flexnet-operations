<?php

namespace Flexnet\EntitlementOrderService\Type;

class SplitBulkEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $bulkEntIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    private $newBulkEntIdentifier;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntIdentifier, ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $newBulkEntIdentifier = null)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
        $this->newBulkEntIdentifier = $newBulkEntIdentifier;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntIdentifier, ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $newBulkEntIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->bulkEntIdentifier;
    }

    public function withBulkEntIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntIdentifier): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntIdentifier = $bulkEntIdentifier;

        return $new;
    }

    public function getNewBulkEntIdentifier(): ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->newBulkEntIdentifier;
    }

    public function withNewBulkEntIdentifier(?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $newBulkEntIdentifier): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType
    {
        $new = clone $this;
        $new->newBulkEntIdentifier = $newBulkEntIdentifier;

        return $new;
    }
}
