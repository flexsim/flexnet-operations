<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdatePartNumbersSimpleListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType|array
     */
    private $partNumber;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType|array $partNumber
     * @var string $opType
     */
    public function __construct($partNumber, string $opType)
    {
        $this->partNumber = $partNumber;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType|array $partNumber
     * @var string $opType
     */
    public static function create($partNumber, string $opType)
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
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType|array $partNumber
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
