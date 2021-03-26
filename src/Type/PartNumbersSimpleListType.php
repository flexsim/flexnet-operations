<?php

namespace Flexsim\FlexnetOperations\Type;

class PartNumbersSimpleListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    private $partNumber;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     */
    public static function create(\Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }


}

