<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkLineItemDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkLineItemIdentifier
     */
    protected $lineItemIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkLineItemIdentifier $lineItemIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LinkLineItemIdentifier $lineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkLineItemIdentifier $lineItemIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LinkLineItemIdentifier $lineItemIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkLineItemIdentifier
     */
    public function getLineItemIdentifier()
    {
        return $this->lineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkLineItemIdentifier $lineItemIdentifier
     * @return $this
     */
    public function setLineItemIdentifier($lineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        return $this;
    }
}
