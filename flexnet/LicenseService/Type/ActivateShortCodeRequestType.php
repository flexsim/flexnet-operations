<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ActivateShortCodeRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\CreateShortCodeDataType|null
     */
    private $shortCodeData;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData = null)
    {
        $this->shortCodeData = $shortCodeData;
    }

    public static function create(?\Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData = null)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): ?\Flexnet\LicenseService\Type\CreateShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(?\Flexnet\LicenseService\Type\CreateShortCodeDataType $shortCodeData): \Flexnet\LicenseService\Type\ActivateShortCodeRequestType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }
}
