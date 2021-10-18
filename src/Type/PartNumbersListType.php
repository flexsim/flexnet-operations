<?php

namespace Flexsim\FlexnetOperations\Type;

class PartNumbersListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType|array 
     */
    protected $partNumber;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType|array $partNumber
     */
    public function __construct($partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType|array $partNumber
     */
    public static function create($partNumber)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType|array 
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType|array $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }
}
