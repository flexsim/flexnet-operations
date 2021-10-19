<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetEntitlementStateRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateDataType
     */
    protected $entitlement;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementStateDataType
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementStateDataType $entitlement
     * @return $this
     */
    public function setEntitlement($entitlement)
    {
        $this->entitlement = $entitlement;
        return $this;
    }
}
