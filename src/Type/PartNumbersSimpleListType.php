<?php

namespace Flexsim\FlexnetOperations\Type;

class PartNumbersSimpleListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType|array
     */
    protected $partNumber;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType|array  $partNumber
     */
    public function __construct($partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType|array  $partNumber
     */
    public static function create($partNumber)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType|array
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType|array  $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;

        return $this;
    }
}
