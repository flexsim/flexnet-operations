<?php

namespace Flexnet\LicenseService\Type;

class VerifiedFulfillmentDataType
{
    /**
     * @var string
     */
    private $recordRefNo;

    /**
     * Constructor
     *
     * @param  string  $recordRefNo
     */
    public function __construct(string $recordRefNo)
    {
        $this->recordRefNo = $recordRefNo;
    }

    /**
     * @param  string  $recordRefNo
     */
    public static function create(string $recordRefNo)
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
     * @return VerifiedFulfillmentDataType
     */
    public function withRecordRefNo(string $recordRefNo): VerifiedFulfillmentDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }
}
