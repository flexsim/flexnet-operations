<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SplitBulkEntitlementResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementResponseListType
     */
    protected $responseData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementListType
     */
    protected $failedData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementResponseListType  $responseData
     * @param  \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementListType  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, SplitBulkEntitlementResponseListType $responseData = null, FailedSplitBulkEntitlementListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementResponseListType  $responseData
     * @param  \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementListType  $failedData
     */
    public static function create(StatusInfoType $statusInfo, SplitBulkEntitlementResponseListType $responseData = null, FailedSplitBulkEntitlementListType $failedData = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementResponseListType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementResponseListType  $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementListType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedSplitBulkEntitlementListType  $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }
}
