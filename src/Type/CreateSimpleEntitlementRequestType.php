<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateSimpleEntitlementRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType
     */
    protected $simpleEntitlement;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement
     * @var string $opType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement, string $opType = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement
     * @var string $opType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementDataType $simpleEntitlement, string $opType = null)
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

    /**
     * @return string
     */
    public function getOpType()
    {
        return $this->opType;
    }

    /**
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;
        return $this;
    }
}
