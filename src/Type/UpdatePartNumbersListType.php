<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdatePartNumbersListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType
     */
    private $partNumber;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType|array $partNumber
     * @var string $opType
     */
    public function __construct($partNumber = null, string $opType)
    {
        $this->partNumber = $partNumber;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierWithModelType|array $partNumber
     * @var string $opType
     */
    public static function create($partNumber = null, string $opType)
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
