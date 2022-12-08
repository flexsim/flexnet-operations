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
     *
     * @param \Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData
     * @param string $reason
     * @param \Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType|null $duplicateFulfillmentRecords
     */
    public function __construct(\Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData, string $reason, \Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType|null $duplicateFulfillmentRecords = null)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
        $this->duplicateFulfillmentRecords = $duplicateFulfillmentRecords;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData
     * @param string $reason
     * @param \Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType|null $duplicateFulfillmentRecords
     */
    public static function create(\Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData, string $reason, \Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType|null $duplicateFulfillmentRecords = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreateShortCodeDataType
     */
    public function getShortCodeData() : \Flexnet\LicenseService\Type\CreateShortCodeDataType
    {
        return $this->shortCodeData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData
     * @return FailedShortCodeDataType
     */
    public function withShortCodeData(\Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData) : \Flexnet\LicenseService\Type\FailedShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return FailedShortCodeDataType
     */
    public function withReason(string $reason) : \Flexnet\LicenseService\Type\FailedShortCodeDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType|null
     */
    public function getDuplicateFulfillmentRecords() : \Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType|null
    {
        return $this->duplicateFulfillmentRecords;
    }

    /**
     * @param \Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType|null $duplicateFulfillmentRecords
     * @return FailedShortCodeDataType
     */
    public function withDuplicateFulfillmentRecords(\Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType|null $duplicateFulfillmentRecords) : \Flexnet\LicenseService\Type\FailedShortCodeDataType
    {
        $new = clone $this;
        $new->duplicateFulfillmentRecords = $duplicateFulfillmentRecords;

        return $new;
    }
}

