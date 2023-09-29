<?php

namespace Flexnet\LicenseService\Type;

class FailedReturnShortCodeDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\ReturnShortCodeDataType
     */
    private $shortCodeData;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(ReturnShortCodeDataType $shortCodeData, string $reason)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
    }

    public static function create(ReturnShortCodeDataType $shortCodeData, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): ReturnShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(ReturnShortCodeDataType $shortCodeData): FailedReturnShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedReturnShortCodeDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
