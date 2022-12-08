<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReturnShortCodeRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\ReturnShortCodeDataType|null
     */
    private $shortCodeData;

    /**
     * @var string|null
     */
    private $returnReason;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\ReturnShortCodeDataType|null $shortCodeData
     * @param string|null $returnReason
     */
    public function __construct(\Flexnet\LicenseService\Type\ReturnShortCodeDataType|null $shortCodeData = null, string|null $returnReason = null)
    {
        $this->shortCodeData = $shortCodeData;
        $this->returnReason = $returnReason;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ReturnShortCodeDataType|null $shortCodeData
     * @param string|null $returnReason
     */
    public static function create(\Flexnet\LicenseService\Type\ReturnShortCodeDataType|null $shortCodeData = null, string|null $returnReason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ReturnShortCodeDataType|null
     */
    public function getShortCodeData() : \Flexnet\LicenseService\Type\ReturnShortCodeDataType|null
    {
        return $this->shortCodeData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ReturnShortCodeDataType|null $shortCodeData
     * @return ReturnShortCodeRequestType
     */
    public function withShortCodeData(\Flexnet\LicenseService\Type\ReturnShortCodeDataType|null $shortCodeData) : \Flexnet\LicenseService\Type\ReturnShortCodeRequestType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReturnReason() : string|null
    {
        return $this->returnReason;
    }

    /**
     * @param string|null $returnReason
     * @return ReturnShortCodeRequestType
     */
    public function withReturnReason(string|null $returnReason) : \Flexnet\LicenseService\Type\ReturnShortCodeRequestType
    {
        $new = clone $this;
        $new->returnReason = $returnReason;

        return $new;
    }
}

