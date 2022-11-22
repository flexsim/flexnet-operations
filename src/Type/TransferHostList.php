<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferHostList extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferHostIdDataType
     */
    protected $hostIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\TransferHostIdDataType  $hostIdentifier
     */
    public function __construct(TransferHostIdDataType $hostIdentifier)
    {
        $this->hostIdentifier = $hostIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\TransferHostIdDataType  $hostIdentifier
     */
    public static function create(TransferHostIdDataType $hostIdentifier)
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
     * @param  \Flexsim\FlexnetOperations\Type\TransferHostIdDataType  $hostIdentifier
     * @return $this
     */
    public function setHostIdentifier($hostIdentifier)
    {
        $this->hostIdentifier = $hostIdentifier;

        return $this;
    }
}
