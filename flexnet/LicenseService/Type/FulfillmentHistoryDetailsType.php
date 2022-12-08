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
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>  $record
     */
    public function __construct(FulfillmentHistoryRecordType|array $record)
    {
        $this->record = $record;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>  $record
     */
    public static function create(FulfillmentHistoryRecordType|array $record)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>
     */
    public function getRecord(): FulfillmentHistoryRecordType|array
    {
        return $this->record;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>  $record
     * @return FulfillmentHistoryDetailsType
     */
    public function withRecord(FulfillmentHistoryRecordType|array $record): FulfillmentHistoryDetailsType
    {
        $new = clone $this;
        $new->record = $record;

        return $new;
    }
}
