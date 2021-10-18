<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeletePartNumberRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeletePartNumberDataType
     */
    protected $partNumber;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeletePartNumberDataType $partNumber
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeletePartNumberDataType $partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeletePartNumberDataType $partNumber
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeletePartNumberDataType $partNumber)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeletePartNumberDataType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeletePartNumberDataType $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }
}
