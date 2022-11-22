<?php

namespace Flexsim\FlexnetOperations\Type;

class HostIdDataSetType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\HostIdDataType
     */
    protected $hostIdData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\HostIdDataType  $hostIdData
     */
    public function __construct(HostIdDataType $hostIdData)
    {
        $this->hostIdData = $hostIdData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\HostIdDataType  $hostIdData
     */
    public static function create(HostIdDataType $hostIdData)
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
     * @param  \Flexsim\FlexnetOperations\Type\HostIdDataType  $hostIdData
     * @return $this
     */
    public function setHostIdData($hostIdData)
    {
        $this->hostIdData = $hostIdData;

        return $this;
    }
}
