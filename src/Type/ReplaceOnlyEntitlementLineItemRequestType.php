<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReplaceOnlyEntitlementLineItemRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType
     */
    protected $lineItem;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem)
    {
        $this->lineItem = $lineItem;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem)
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
}
