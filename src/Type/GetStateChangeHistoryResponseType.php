<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStateChangeHistoryResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateChangeResponseType
     */
    private $responseData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\StateChangeResponseType $responseData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\StateChangeResponseType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\StateChangeResponseType $responseData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\StateChangeResponseType $responseData = null)
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

    /**
     * @return \Flexsim\FlexnetOperations\Type\StateChangeResponseType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StateChangeResponseType $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;
        return $this;
    }


}
