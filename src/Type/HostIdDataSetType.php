<?php

namespace Flexsim\FlexnetOperations\Type;

class HostIdDataSetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostIdDataType
     */
    private $hostIdData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\HostIdDataType $hostIdData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\HostIdDataType $hostIdData)
    {
        $this->hostIdData = $hostIdData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\HostIdDataType $hostIdData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\HostIdDataType $hostIdData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostIdDataType
     */
    public function getHostIdData()
    {
        return $this->hostIdData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostIdDataType $hostIdData
     * @return $this
     */
    public function setHostIdData($hostIdData)
    {
        $this->hostIdData = $hostIdData;
        return $this;
    }


}

