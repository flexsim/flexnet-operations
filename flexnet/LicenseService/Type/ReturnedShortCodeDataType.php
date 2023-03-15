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
     */
    public function __construct(string $shortCode)
    {
        $this->shortCode = $shortCode;
    }

    public static function create(string $shortCode)
    {
        return new static(...\func_get_args());
    }

    public function getShortCode(): string
    {
        return $this->shortCode;
    }

    public function withShortCode(string $shortCode): ReturnedShortCodeDataType
    {
        $new = clone $this;
        $new->shortCode = $shortCode;

        return $new;
    }
}
