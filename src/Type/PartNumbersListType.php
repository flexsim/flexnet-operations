<?php

namespace Flexsim\FlexnetOperations\Type;

class PartNumbersListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType
     */
    private $partNumber;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType $partNumber
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType $partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType $partNumber
     */
    public static function create(\Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType $partNumber)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }


}

