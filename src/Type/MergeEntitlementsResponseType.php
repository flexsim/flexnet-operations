<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MergeEntitlementsResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo)
    {
        $this->statusInfo = $statusInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }


}

