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
     */
    public function __construct(string $recordRefNo)
    {
        $this->recordRefNo = $recordRefNo;
    }

    public static function create(string $recordRefNo)
    {
        return new static(...\func_get_args());
    }

    public function getRecordRefNo(): string
    {
        return $this->recordRefNo;
    }

    public function withRecordRefNo(string $recordRefNo): VerifiedFulfillmentDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }
}
