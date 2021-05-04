<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedPartNumberDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataType|array
     */
    private $createdPartNumber;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataType|array $createdPartNumber
     */
    public function __construct($createdPartNumber = null)
    {
        $this->createdPartNumber = $createdPartNumber;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataType|array $createdPartNumber
     */
    public static function create($createdPartNumber = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataType|array
     */
    public function getCreatedPartNumber()
    {
        return $this->createdPartNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataType|array $createdPartNumber
     * @return $this
     */
    public function setCreatedPartNumber($createdPartNumber)
    {
        $this->createdPartNumber = $createdPartNumber;
        return $this;
    }
}
