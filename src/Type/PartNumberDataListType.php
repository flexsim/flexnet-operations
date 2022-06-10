<?php

namespace Flexsim\FlexnetOperations\Type;

class PartNumberDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberDataType|array
     */
    protected $partNumber;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\PartNumberDataType|array $partNumber
     */
    public function __construct($partNumber = null)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\PartNumberDataType|array $partNumber
     */
    public static function create($partNumber = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberDataType|array
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberDataType|array $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;

        return $this;
    }
}
