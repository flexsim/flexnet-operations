<?php

namespace Flexnet\LicenseService\Type;

class FailedShortCodeDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\CreateShortCodeDataType
     */
    private $shortCodeData;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var \Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType|null
     */
    private $duplicateFulfillmentRecords;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData, string $reason, ?\Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords = null)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
        $this->duplicateFulfillmentRecords = $duplicateFulfillmentRecords;
    }

    public static function create(\Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData, string $reason, ?\Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords = null)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): \Flexnet\LicenseService\Type\CreateShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(\Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData): \Flexnet\LicenseService\Type\FailedShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\LicenseService\Type\FailedShortCodeDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }

    public function getDuplicateFulfillmentRecords(): ?\Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType
    {
        return $this->duplicateFulfillmentRecords;
    }

    public function withDuplicateFulfillmentRecords(?\Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords): \Flexnet\LicenseService\Type\FailedShortCodeDataType
    {
        $new = clone $this;
        $new->duplicateFulfillmentRecords = $duplicateFulfillmentRecords;

        return $new;
    }
}
