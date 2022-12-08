<?php

namespace Flexnet\LicenseService\Type;

class CreatedShortCodeDataType
{
    /**
     * @var string
     */
    private $shortCode;

    /**
     * Constructor
     *
     * @param  string  $shortCode
     */
    public function __construct(string $shortCode)
    {
        $this->shortCode = $shortCode;
    }

    /**
     * @param  string  $shortCode
     */
    public static function create(string $shortCode)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getShortCode(): string
    {
        return $this->shortCode;
    }

    /**
     * @param  string  $shortCode
     * @return CreatedShortCodeDataType
     */
    public function withShortCode(string $shortCode): CreatedShortCodeDataType
    {
        $new = clone $this;
        $new->shortCode = $shortCode;

        return $new;
    }
}
