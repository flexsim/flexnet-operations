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
     *
     * @param \Flexnet\LicenseService\Type\CreateShortCodeDataType|null $shortCodeData
     */
    public function __construct(\Flexnet\LicenseService\Type\CreateShortCodeDataType|null $shortCodeData = null)
    {
        $this->shortCodeData = $shortCodeData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreateShortCodeDataType|null $shortCodeData
     */
    public static function create(\Flexnet\LicenseService\Type\CreateShortCodeDataType|null $shortCodeData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreateShortCodeDataType|null
     */
    public function getShortCodeData() : \Flexnet\LicenseService\Type\CreateShortCodeDataType|null
    {
        return $this->shortCodeData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreateShortCodeDataType|null $shortCodeData
     * @return ActivateShortCodeRequestType
     */
    public function withShortCodeData(\Flexnet\LicenseService\Type\CreateShortCodeDataType|null $shortCodeData) : \Flexnet\LicenseService\Type\ActivateShortCodeRequestType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }
}

