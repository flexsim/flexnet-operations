<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetLineItemStateRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LineItemStateDataType
     */
    protected $lineItem;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LineItemStateDataType $lineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LineItemStateDataType $lineItem)
    {
        $this->lineItem = $lineItem;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LineItemStateDataType $lineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LineItemStateDataType $lineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LineItemStateDataType
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LineItemStateDataType $lineItem
     * @return $this
     */
    public function setLineItem($lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }
}
