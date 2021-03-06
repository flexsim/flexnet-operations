<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateSimpleEntitlementRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType
     */
    protected $simpleEntitlement;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType $simpleEntitlement
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType $simpleEntitlement)
    {
        $this->simpleEntitlement = $simpleEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType $simpleEntitlement
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType $simpleEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType
     */
    public function getSimpleEntitlement()
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType $simpleEntitlement
     * @return $this
     */
    public function setSimpleEntitlement($simpleEntitlement)
    {
        $this->simpleEntitlement = $simpleEntitlement;

        return $this;
    }
}
