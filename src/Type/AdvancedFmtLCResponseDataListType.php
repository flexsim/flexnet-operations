<?php

namespace Flexsim\FlexnetOperations\Type;

class AdvancedFmtLCResponseDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType|array
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType|array $fulfillment
     */
    public function __construct($fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType|array $fulfillment
     */
    public static function create($fulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType|array
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType|array $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }
}
