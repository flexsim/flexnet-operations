<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentHistoryDetailsType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>|null
     */
    private $record;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>|null  $record
     */
    public function __construct(FulfillmentHistoryRecordType|array $record = null)
    {
        $this->record = $record;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>|null  $record
     */
    public static function create(FulfillmentHistoryRecordType|array $record = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>|null
     */
    public function getRecord(): FulfillmentHistoryRecordType|array|null
    {
        return $this->record;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>|null  $record
     */
    public function withRecord(FulfillmentHistoryRecordType|array|null $record): FulfillmentHistoryDetailsType
    {
        $new = clone $this;
        $new->record = $record;

        return $new;
    }
}
