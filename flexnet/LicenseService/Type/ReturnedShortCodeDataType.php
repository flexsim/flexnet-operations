<?php

namespace Flexnet\LicenseService\Type;

class ReturnedShortCodeDataType
{
    /**
     * @var string
     */
    private $shortCode;

    /**
     * Constructor
     *
     * @param string $shortCode
     */
    public function __construct(string $shortCode)
    {
        $this->shortCode = $shortCode;
    }

    /**
     * @param string $shortCode
     */
    public static function create(string $shortCode)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getShortCode() : string
    {
        return $this->shortCode;
    }

    /**
     * @param string $shortCode
     * @return ReturnedShortCodeDataType
     */
    public function withShortCode(string $shortCode) : \Flexnet\LicenseService\Type\ReturnedShortCodeDataType
    {
        $new = clone $this;
        $new->shortCode = $shortCode;

        return $new;
    }
}

