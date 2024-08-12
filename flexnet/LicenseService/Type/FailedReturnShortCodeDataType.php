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
    public function __construct(\Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData, string $reason)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): \Flexnet\LicenseService\Type\ReturnShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(\Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData): \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
