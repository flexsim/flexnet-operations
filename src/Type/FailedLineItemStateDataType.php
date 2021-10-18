<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedLineItemStateDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LineItemStateDataType
     */
    protected $lineItem;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LineItemStateDataType $lineItem
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LineItemStateDataType $lineItem, string $reason)
    {
        $this->lineItem = $lineItem;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LineItemStateDataType $lineItem
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LineItemStateDataType $lineItem, string $reason)
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

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
}
