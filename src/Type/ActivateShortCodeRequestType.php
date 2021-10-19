<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ActivateShortCodeRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateShortCodeDataType
     */
    protected $shortCodeData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateShortCodeDataType $shortCodeData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateShortCodeDataType $shortCodeData = null)
    {
        $this->shortCodeData = $shortCodeData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateShortCodeDataType $shortCodeData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateShortCodeDataType $shortCodeData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateShortCodeDataType
     */
    public function getShortCodeData()
    {
        return $this->shortCodeData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateShortCodeDataType $shortCodeData
     * @return $this
     */
    public function setShortCodeData($shortCodeData)
    {
        $this->shortCodeData = $shortCodeData;
        return $this;
    }
}
