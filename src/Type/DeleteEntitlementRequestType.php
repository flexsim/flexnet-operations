<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteEntitlementRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteEntitlementDataType
     */
    protected $entitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteEntitlementDataType $entitlement
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeleteEntitlementDataType $entitlement)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteEntitlementDataType $entitlement
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeleteEntitlementDataType $entitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteEntitlementDataType
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteEntitlementDataType $entitlement
     * @return $this
     */
    public function setEntitlement($entitlement)
    {
        $this->entitlement = $entitlement;
        return $this;
    }
}
