<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferHostList
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferHostIdDataType
     */
    private $hostIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferHostIdDataType $hostIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TransferHostIdDataType $hostIdentifier)
    {
        $this->hostIdentifier = $hostIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferHostIdDataType $hostIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TransferHostIdDataType $hostIdentifier)
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


}

