<?php

namespace Flexsim\FlexnetOperations\Type;

class TrustedKeyIdentifierType extends FlexnetType
{
    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyPKType
     */
    protected $primaryKeys;

    /**
     * Constructor
     *
     * @param  string  $uniqueId
     * @param  \Flexsim\FlexnetOperations\Type\TrustedKeyPKType  $primaryKeys
     */
    public function __construct(string $uniqueId = null, TrustedKeyPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $uniqueId
     * @param  \Flexsim\FlexnetOperations\Type\TrustedKeyPKType  $primaryKeys
     */
    public static function create(string $uniqueId = null, TrustedKeyPKType $primaryKeys = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param  string  $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TrustedKeyPKType
     */
    public function getPrimaryKeys()
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\TrustedKeyPKType  $primaryKeys
     * @return $this
     */
    public function setPrimaryKeys($primaryKeys)
    {
        $this->primaryKeys = $primaryKeys;

        return $this;
    }
}
