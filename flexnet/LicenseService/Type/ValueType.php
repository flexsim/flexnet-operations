<?php

namespace Flexnet\LicenseService\Type;

class ValueType
{
    /**
     * @var string|array<string>|null
     */
    private $value;

    /**
     * Constructor
     *
     * @param string|array<string>|null $value
     */
    public function __construct(string|array|null $value = null)
    {
        $this->value = $value;
    }

    /**
     * @param string|array<string>|null $value
     */
    public static function create(string|array|null $value = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<string>|null
     */
    public function getValue() : string|array|null
    {
        return $this->value;
    }

    /**
     * @param string|array<string>|null $value
     * @return ValueType
     */
    public function withValue(string|array|null $value) : \Flexnet\LicenseService\Type\ValueType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }
}

