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
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array|null $record = null)
    {
        $this->record = $record;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>|null  $record
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array|null $record = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>|null
     */
    public function getRecord(): \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array|null
    {
        return $this->record;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array<\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType>|null  $record
     */
    public function withRecord(\Flexnet\LicenseService\Type\FulfillmentHistoryRecordType|array|null $record): \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType
    {
        $new = clone $this;
        $new->record = $record;

        return $new;
    }
}
