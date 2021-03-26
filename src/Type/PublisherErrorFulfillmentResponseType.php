<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PublisherErrorFulfillmentResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PublisherErrorResponseDataType
     */
    private $responseData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedPublisherErrorResponselistDataType
     */
    private $failedData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\PublisherErrorResponseDataType $responseData
     * @var \Flexsim\FlexnetOperations\Type\FailedPublisherErrorResponselistDataType $failedData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\PublisherErrorResponseDataType $responseData = null, \Flexsim\FlexnetOperations\Type\FailedPublisherErrorResponselistDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\PublisherErrorResponseDataType $responseData
     * @var \Flexsim\FlexnetOperations\Type\FailedPublisherErrorResponselistDataType $failedData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\PublisherErrorResponseDataType $responseData = null, \Flexsim\FlexnetOperations\Type\FailedPublisherErrorResponselistDataType $failedData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\PublisherErrorResponseDataType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PublisherErrorResponseDataType $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedPublisherErrorResponselistDataType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedPublisherErrorResponselistDataType $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;
        return $this;
    }


}

