<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedPartNumberDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType
     */
    protected $partNumber;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType  $partNumber
     * @param  string  $reason
     */
    public function __construct(CreatePartNumberDataType $partNumber = null, string $reason = null)
    {
        $this->partNumber = $partNumber;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType  $partNumber
     * @param  string  $reason
     */
    public static function create(CreatePartNumberDataType $partNumber = null, string $reason = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType  $partNumber
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
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
