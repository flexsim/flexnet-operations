<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedPartNumberDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType
     */
    private $partNumber;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType $partNumber
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreatePartNumberDataType $partNumber = null, string $reason = null)
    {
        $this->partNumber = $partNumber;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType $partNumber
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreatePartNumberDataType $partNumber = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType $partNumber
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
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

