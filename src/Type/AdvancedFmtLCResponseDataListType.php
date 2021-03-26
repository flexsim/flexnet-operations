<?php

namespace Flexsim\FlexnetOperations\Type;

class AdvancedFmtLCResponseDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType $fulfillment
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType $fulfillment
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType $fulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataType $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }


}

