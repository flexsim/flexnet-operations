<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RemoveEntitlementLineItemRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType
     */
    protected $lineItemData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType  $lineItemData
     */
    public function __construct(RemoveEntitlementLineItemDataType $lineItemData)
    {
        $this->lineItemData = $lineItemData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType  $lineItemData
     */
    public static function create(RemoveEntitlementLineItemDataType $lineItemData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType
     */
    public function getLineItemData()
    {
        return $this->lineItemData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType  $lineItemData
     * @return $this
     */
    public function setLineItemData($lineItemData)
    {
        $this->lineItemData = $lineItemData;

        return $this;
    }
}
