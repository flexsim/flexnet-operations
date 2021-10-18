<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateEntitlementLineItemRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemDataType
     */
    protected $lineItemData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemDataType $lineItemData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemDataType $lineItemData)
    {
        $this->lineItemData = $lineItemData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemDataType $lineItemData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemDataType $lineItemData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemDataType
     */
    public function getLineItemData()
    {
        return $this->lineItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemDataType $lineItemData
     * @return $this
     */
    public function setLineItemData($lineItemData)
    {
        $this->lineItemData = $lineItemData;
        return $this;
    }
}
