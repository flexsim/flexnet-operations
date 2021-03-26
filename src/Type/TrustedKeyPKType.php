<?php

namespace Flexsim\FlexnetOperations\Type;

class TrustedKeyPKType
{

    /**
     * @var string
     */
    private $keyName;

    /**
     * Constructor
     *
     * @var string $keyName
     */
    public function __construct(string $keyName)
    {
        $this->keyName = $keyName;
    }

    /**
     * create a new instance of this class
     *
     * @var string $keyName
     */
    public static function create(string $keyName)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * @param string $keyName
     * @return $this
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;
        return $this;
    }


}

