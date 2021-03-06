<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdatePartNumbersListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType|array
     */
    protected $partNumber;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType|array $partNumber
     * @param string $opType
     */
    public function __construct($partNumber, string $opType)
    {
        $this->partNumber = $partNumber;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType|array $partNumber
     * @param string $opType
     */
    public static function create($partNumber, string $opType)
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

    /**
     * @return string
     */
    public function getOpType()
    {
        return $this->opType;
    }

    /**
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;

        return $this;
    }
}
