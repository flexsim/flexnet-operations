<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseServiceDictionaryEntry extends FlexnetType
{
    /**
     * @var string
     */
    protected $Key;

    /**
     * @var string
     */
    protected $Value;

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
     * create a new instance of this class
     *
     * @param string $Key
     * @param string $Value
     */
    public static function create(string $Key, string $Value)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param string $Key
     * @return $this
     */
    public function setKey($Key)
    {
        $this->Key = $Key;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return $this
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }
}
