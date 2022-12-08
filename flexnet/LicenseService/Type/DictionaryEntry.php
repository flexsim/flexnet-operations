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
     *
     * @param string $Key
     * @param string $Value
     */
    public function __construct(string $Key, string $Value)
    {
        $this->Key = $Key;
        $this->Value = $Value;
    }

    /**
     * @param string $Key
     * @param string $Value
     */
    public static function create(string $Key, string $Value)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getKey() : string
    {
        return $this->Key;
    }

    /**
     * @param string $Key
     * @return DictionaryEntry
     */
    public function withKey(string $Key) : \Flexnet\LicenseService\Type\DictionaryEntry
    {
        $new = clone $this;
        $new->Key = $Key;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return DictionaryEntry
     */
    public function withValue(string $Value) : \Flexnet\LicenseService\Type\DictionaryEntry
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}

