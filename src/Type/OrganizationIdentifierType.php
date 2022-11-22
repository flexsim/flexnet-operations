<?php

namespace Flexsim\FlexnetOperations\Type;

class OrganizationIdentifierType extends FlexnetType
{
    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationPKType
     */
    protected $primaryKeys;

    /**
     * Constructor
     *
     * @param  string  $uniqueId
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationPKType  $primaryKeys
     */
    public function __construct(string $uniqueId = null, OrganizationPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $uniqueId
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationPKType  $primaryKeys
     */
    public static function create(string $uniqueId = null, OrganizationPKType $primaryKeys = null)
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
     * @return \Flexsim\FlexnetOperations\Type\OrganizationPKType
     */
    public function getPrimaryKeys()
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationPKType  $primaryKeys
     * @return $this
     */
    public function setPrimaryKeys($primaryKeys)
    {
        $this->primaryKeys = $primaryKeys;

        return $this;
    }
}
