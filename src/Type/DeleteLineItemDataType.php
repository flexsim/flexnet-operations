<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteLineItemDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteLineItemIdentifier
     */
    protected $lineItemIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteLineItemIdentifier $lineItemIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeleteLineItemIdentifier $lineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteLineItemIdentifier $lineItemIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeleteLineItemIdentifier $lineItemIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteLineItemIdentifier
     */
    public function getLineItemIdentifier()
    {
        return $this->lineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteLineItemIdentifier $lineItemIdentifier
     * @return $this
     */
    public function setLineItemIdentifier($lineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        return $this;
    }
}
