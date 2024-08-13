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
     */
    public function __construct(?\Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData = null, ?string $returnReason = null)
    {
        $this->shortCodeData = $shortCodeData;
        $this->returnReason = $returnReason;
    }

    public static function create(?\Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData = null, ?string $returnReason = null)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): ?\Flexnet\LicenseService\Type\ReturnShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(?\Flexnet\LicenseService\Type\ReturnShortCodeDataType $shortCodeData): \Flexnet\LicenseService\Type\ReturnShortCodeRequestType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }

    public function getReturnReason(): ?string
    {
        return $this->returnReason;
    }

    public function withReturnReason(?string $returnReason): \Flexnet\LicenseService\Type\ReturnShortCodeRequestType
    {
        $new = clone $this;
        $new->returnReason = $returnReason;

        return $new;
    }
}
