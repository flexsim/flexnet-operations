<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RepairShortCodeRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\RepairShortCodeDataType
     */
    protected $shortCodeData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\RepairShortCodeDataType $shortCodeData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\RepairShortCodeDataType $shortCodeData = null)
    {
        $this->shortCodeData = $shortCodeData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\RepairShortCodeDataType $shortCodeData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\RepairShortCodeDataType $shortCodeData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RepairShortCodeDataType
     */
    public function getShortCodeData()
    {
        return $this->shortCodeData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RepairShortCodeDataType $shortCodeData
     * @return $this
     */
    public function setShortCodeData($shortCodeData)
    {
        $this->shortCodeData = $shortCodeData;
        return $this;
    }
}
