<?php

namespace Flexsim\FlexnetOperations\Type;

class HostTypeListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    private $hostType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\HostTypePKType $hostType)
    {
        $this->hostType = $hostType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\HostTypePKType $hostType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    public function getHostType()
    {
        return $this->hostType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     * @return $this
     */
    public function setHostType($hostType)
    {
        $this->hostType = $hostType;
        return $this;
    }


}

