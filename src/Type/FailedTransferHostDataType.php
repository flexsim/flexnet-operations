<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedTransferHostDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferHostIdDataType
     */
    private $hostIdentifier;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferHostIdDataType $hostIdentifier
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TransferHostIdDataType $hostIdentifier = null, string $reason = null)
    {
        $this->hostIdentifier = $hostIdentifier;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferHostIdDataType $hostIdentifier
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TransferHostIdDataType $hostIdentifier = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferHostIdDataType
     */
    public function getHostIdentifier()
    {
        return $this->hostIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferHostIdDataType $hostIdentifier
     * @return $this
     */
    public function setHostIdentifier($hostIdentifier)
    {
        $this->hostIdentifier = $hostIdentifier;
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
