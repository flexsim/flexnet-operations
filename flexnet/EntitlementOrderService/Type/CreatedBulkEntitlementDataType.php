<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreatedBulkEntitlementDataType
{
    /**
     * @var string
     */
    private $recordRefNo;

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $bulkEntitlementId;

    /**
     * Constructor
     */
    public function __construct(string $recordRefNo, string $uniqueId, string $bulkEntitlementId)
    {
        $this->recordRefNo = $recordRefNo;
        $this->uniqueId = $uniqueId;
        $this->bulkEntitlementId = $bulkEntitlementId;
    }

    public static function create(string $recordRefNo, string $uniqueId, string $bulkEntitlementId)
    {
        return new static(...\func_get_args());
    }

    public function getRecordRefNo(): string
    {
        return $this->recordRefNo;
    }

    public function withRecordRefNo(string $recordRefNo): CreatedBulkEntitlementDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): CreatedBulkEntitlementDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getBulkEntitlementId(): string
    {
        return $this->bulkEntitlementId;
    }

    public function withBulkEntitlementId(string $bulkEntitlementId): CreatedBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlementId = $bulkEntitlementId;

        return $new;
    }
}
