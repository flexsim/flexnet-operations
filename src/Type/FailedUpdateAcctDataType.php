<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateAcctDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateAcctDataType
     */
    protected $acctData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateAcctDataType $acctData
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateAcctDataType $acctData = null, string $reason = null)
    {
        $this->acctData = $acctData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateAcctDataType $acctData
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateAcctDataType $acctData = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateAcctDataType
     */
    public function getAcctData()
    {
        return $this->acctData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateAcctDataType $acctData
     * @return $this
     */
    public function setAcctData($acctData)
    {
        $this->acctData = $acctData;
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
