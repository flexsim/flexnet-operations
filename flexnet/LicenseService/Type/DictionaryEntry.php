<?php

namespace Flexnet\LicenseService\Type;

class DictionaryEntry
{
    /**
     * @var string
     */
    private $Key;

    /**
     * @var string
     */
    private $Value;

    /**
     * Constructor
     */
    public function __construct(string $Key, string $Value)
    {
        $this->Key = $Key;
        $this->Value = $Value;
    }

    public static function create(string $Key, string $Value)
    {
        return new static(...\func_get_args());
    }

    public function getKey(): string
    {
        return $this->Key;
    }

    public function withKey(string $Key): \Flexnet\LicenseService\Type\DictionaryEntry
    {
        $new = clone $this;
        $new->Key = $Key;

        return $new;
    }

    public function getValue(): string
    {
        return $this->Value;
    }

    public function withValue(string $Value): \Flexnet\LicenseService\Type\DictionaryEntry
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
