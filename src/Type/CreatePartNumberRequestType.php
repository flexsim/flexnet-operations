<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreatePartNumberRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType
     */
    protected $partNumber;

    /**
     * @var bool
     */
    protected $processSync;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType $partNumber
     * @param bool $processSync
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreatePartNumberDataType $partNumber, bool $processSync = null)
    {
        $this->partNumber = $partNumber;
        $this->processSync = $processSync;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatePartNumberDataType $partNumber
     * @param bool $processSync
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreatePartNumberDataType $partNumber, bool $processSync = null)
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
     * @return bool
     */
    public function getProcessSync()
    {
        return $this->processSync;
    }

    /**
     * @param bool $processSync
     * @return $this
     */
    public function setProcessSync($processSync)
    {
        $this->processSync = $processSync;

        return $this;
    }
}
