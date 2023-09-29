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
    public function __construct(CreateShortCodeDataType $shortCodeData, string $reason, DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords = null)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
        $this->duplicateFulfillmentRecords = $duplicateFulfillmentRecords;
    }

    public static function create(CreateShortCodeDataType $shortCodeData, string $reason, DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords = null)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): CreateShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(CreateShortCodeDataType $shortCodeData): FailedShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedShortCodeDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }

    public function getDuplicateFulfillmentRecords(): ?DuplicateFulfillmentRecordListDataType
    {
        return $this->duplicateFulfillmentRecords;
    }

    public function withDuplicateFulfillmentRecords(?DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords): FailedShortCodeDataType
    {
        $new = clone $this;
        $new->duplicateFulfillmentRecords = $duplicateFulfillmentRecords;

        return $new;
    }
}
