<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedLineItemStateDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedLineItemStateDataType|array
     */
    protected $failedLineItem;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedLineItemStateDataType|array  $failedLineItem
     */
    public function __construct($failedLineItem = null)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedLineItemStateDataType|array  $failedLineItem
     */
    public static function create($failedLineItem = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedLineItemStateDataType|array
     */
    public function getFailedLineItem()
    {
        return $this->failedLineItem;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedLineItemStateDataType|array  $failedLineItem
     * @return $this
     */
    public function setFailedLineItem($failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;

        return $this;
    }
}
