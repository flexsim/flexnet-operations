<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementStateChangeListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateChangeDataType|array
     */
    protected $entitlement;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementStateChangeDataType|array $entitlement
     */
    public function __construct($entitlement = null)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementStateChangeDataType|array $entitlement
     */
    public static function create($entitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementStateChangeDataType|array
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementStateChangeDataType|array $entitlement
     * @return $this
     */
    public function setEntitlement($entitlement)
    {
        $this->entitlement = $entitlement;
        return $this;
    }
}
