<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementStateChangeListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateChangeDataType
     */
    private $entitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateChangeDataType|array $entitlement
     */
    public function __construct($entitlement = null)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateChangeDataType|array $entitlement
     */
    public static function create($entitlement = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementStateChangeDataType
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementStateChangeDataType $entitlement
     * @return $this
     */
    public function setEntitlement($entitlement)
    {
        $this->entitlement = $entitlement;
        return $this;
    }


}

