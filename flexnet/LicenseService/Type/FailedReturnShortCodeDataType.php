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
     *
     * @param \Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData
     * @param string $reason
     */
    public function __construct(\Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData, string $reason)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData
     * @param string $reason
     */
    public static function create(\Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ReturnShortCodeDataType
     */
    public function getShortCodeData() : \Flexnet\LicenseService\Type\ReturnShortCodeDataType
    {
        return $this->shortCodeData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData
     * @return FailedReturnShortCodeDataType
     */
    public function withShortCodeData(\Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData) : \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType
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
     * @return FailedReturnShortCodeDataType
     */
    public function withReason(string $reason) : \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

