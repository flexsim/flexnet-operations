<?php

namespace Flexsim\FlexnetOperations\Type;

class UserIdentifierType extends FlexnetType
{

    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var string
     */
    protected $userName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserPKType
     */
    protected $primaryKeys;

    /**
     * Constructor
     *
     * @var string $uniqueId
     * @var string $userName
     * @var \Flexsim\FlexnetOperations\Type\UserPKType $primaryKeys
     */
    public function __construct(string $uniqueId = null, string $userName = null, \Flexsim\FlexnetOperations\Type\UserPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->userName = $userName;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * create a new instance of this class
     *
     * @var string $uniqueId
     * @var string $userName
     * @var \Flexsim\FlexnetOperations\Type\UserPKType $primaryKeys
     */
    public static function create(string $uniqueId = null, string $userName = null, \Flexsim\FlexnetOperations\Type\UserPKType $primaryKeys = null)
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
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserPKType
     */
    public function getPrimaryKeys()
    {
        return $this->primaryKeys;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserPKType $primaryKeys
     * @return $this
     */
    public function setPrimaryKeys($primaryKeys)
    {
        $this->primaryKeys = $primaryKeys;
        return $this;
    }
}
