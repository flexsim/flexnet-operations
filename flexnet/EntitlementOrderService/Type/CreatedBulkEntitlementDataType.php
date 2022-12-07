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
     *
     * @param  string  $recordRefNo
     * @param  string  $uniqueId
     * @param  string  $bulkEntitlementId
     */
    public function __construct(string $recordRefNo, string $uniqueId, string $bulkEntitlementId)
    {
        $this->recordRefNo = $recordRefNo;
        $this->uniqueId = $uniqueId;
        $this->bulkEntitlementId = $bulkEntitlementId;
    }

    /**
     * @param  string  $recordRefNo
     * @param  string  $uniqueId
     * @param  string  $bulkEntitlementId
     */
    public static function create(string $recordRefNo, string $uniqueId, string $bulkEntitlementId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getRecordRefNo(): string
    {
        return $this->recordRefNo;
    }

    /**
     * @param  string  $recordRefNo
     * @return CreatedBulkEntitlementDataType
     */
    public function withRecordRefNo(string $recordRefNo): CreatedBulkEntitlementDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    /**
     * @param  string  $uniqueId
     * @return CreatedBulkEntitlementDataType
     */
    public function withUniqueId(string $uniqueId): CreatedBulkEntitlementDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return string
     */
    public function getBulkEntitlementId(): string
    {
        return $this->bulkEntitlementId;
    }

    /**
     * @param  string  $bulkEntitlementId
     * @return CreatedBulkEntitlementDataType
     */
    public function withBulkEntitlementId(string $bulkEntitlementId): CreatedBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlementId = $bulkEntitlementId;

        return $new;
    }
}
