<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementLineItemIdentifierType extends FlexnetType
{
    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemPKType
     */
    protected $primaryKeys;

    /**
     * Constructor
     *
     * @param  string  $uniqueId
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemPKType  $primaryKeys
     */
    public function __construct(string $uniqueId = null, EntitlementLineItemPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $uniqueId
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemPKType  $primaryKeys
     */
    public static function create(string $uniqueId = null, EntitlementLineItemPKType $primaryKeys = null)
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
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemPKType
     */
    public function getPrimaryKeys()
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemPKType  $primaryKeys
     * @return $this
     */
    public function setPrimaryKeys($primaryKeys)
    {
        $this->primaryKeys = $primaryKeys;

        return $this;
    }
}
