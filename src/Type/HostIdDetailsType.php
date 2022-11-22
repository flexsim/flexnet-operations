<?php

namespace Flexsim\FlexnetOperations\Type;

class HostIdDetailsType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\HostIdDataDetailsType
     */
    protected $hostIdData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\HostIdDataDetailsType  $hostIdData
     */
    public function __construct(HostIdDataDetailsType $hostIdData)
    {
        $this->hostIdData = $hostIdData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\HostIdDataDetailsType  $hostIdData
     */
    public static function create(HostIdDataDetailsType $hostIdData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostIdDataDetailsType
     */
    public function getHostIdData()
    {
        return $this->hostIdData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\HostIdDataDetailsType  $hostIdData
     * @return $this
     */
    public function setHostIdData($hostIdData)
    {
        $this->hostIdData = $hostIdData;

        return $this;
    }
}
