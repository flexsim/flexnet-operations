<?php

namespace Flexsim\FlexnetOperations\Type;

class HostTypeListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType|array 
     */
    private $hostType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType|array $hostType
     */
    public function __construct($hostType)
    {
        $this->hostType = $hostType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType|array $hostType
     */
    public static function create($hostType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostTypePKType|array 
     */
    public function getHostType()
    {
        return $this->hostType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostTypePKType|array $hostType
     * @return $this
     */
    public function setHostType($hostType)
    {
        $this->hostType = $hostType;
        return $this;
    }
}
