<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMatchingLineItemsResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsResponseListType
     */
    protected $responseData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemsListType
     */
    protected $failedData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsResponseListType $responseData
     * @param \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemsListType $failedData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsResponseListType $responseData = null, \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemsListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsResponseListType $responseData
     * @param \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemsListType $failedData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsResponseListType $responseData = null, \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemsListType $failedData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsResponseListType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsResponseListType $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemsListType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemsListType $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }
}
