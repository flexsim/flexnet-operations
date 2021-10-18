<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddOnlyEntitlementLineItemRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType
     */
    protected $lineItem;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem
     * @var string $opType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem, string $opType = null)
    {
        $this->lineItem = $lineItem;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem
     * @var string $opType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem, string $opType = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem
     * @return $this
     */
    public function setLineItem($lineItem)
    {
        $this->lineItem = $lineItem;
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
