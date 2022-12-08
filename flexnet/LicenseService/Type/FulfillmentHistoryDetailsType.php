<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentHistoryDetailsType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>
     */
    private $record;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType> $record
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array $record)
    {
        $this->record = $record;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType> $record
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array $record)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>
     */
    public function getRecord() : \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array
    {
        return $this->record;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType> $record
     * @return FulfillmentHistoryDetailsType
     */
    public function withRecord(\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array $record) : \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType
    {
        $new = clone $this;
        $new->record = $record;

        return $new;
    }
}

