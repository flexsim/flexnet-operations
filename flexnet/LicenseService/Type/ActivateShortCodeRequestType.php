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
    public function __construct(CreateShortCodeDataType $shortCodeData = null)
    {
        $this->shortCodeData = $shortCodeData;
    }

    public static function create(CreateShortCodeDataType $shortCodeData = null)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): ?CreateShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(?CreateShortCodeDataType $shortCodeData): ActivateShortCodeRequestType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }
}
