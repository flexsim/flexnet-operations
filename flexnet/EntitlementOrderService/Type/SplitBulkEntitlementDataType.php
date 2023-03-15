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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $newBulkEntIdentifier
     */
    public function __construct(EntitlementIdentifierType $bulkEntIdentifier, EntitlementIdentifierType|null $newBulkEntIdentifier = null)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
        $this->newBulkEntIdentifier = $newBulkEntIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $newBulkEntIdentifier
     */
    public static function create(EntitlementIdentifierType $bulkEntIdentifier, EntitlementIdentifierType|null $newBulkEntIdentifier = null)
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
    public function withBulkEntIdentifier(EntitlementIdentifierType $bulkEntIdentifier): SplitBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntIdentifier = $bulkEntIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    public function getNewBulkEntIdentifier(): EntitlementIdentifierType|null
    {
        return $this->newBulkEntIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $newBulkEntIdentifier
     */
    public function withNewBulkEntIdentifier(EntitlementIdentifierType|null $newBulkEntIdentifier): SplitBulkEntitlementDataType
    {
        $new = clone $this;
        $new->newBulkEntIdentifier = $newBulkEntIdentifier;

        return $new;
    }
}
