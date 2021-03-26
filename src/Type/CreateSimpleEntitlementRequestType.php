<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateSimpleEntitlementRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType
     */
    private $simpleEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement)
    {
        $this->simpleEntitlement = $simpleEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType
     */
    public function getSimpleEntitlement()
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement
     * @return $this
     */
    public function setSimpleEntitlement($simpleEntitlement)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        return $this;
    }


}

