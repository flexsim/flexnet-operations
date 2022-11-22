<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EntitlementLifeCycleResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedEntitlementLifeCycleDataListType
     */
    protected $failedData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedEntitlementLifeCycleDataListType
     */
    protected $responseData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedEntitlementLifeCycleDataListType  $failedData
     * @param  \Flexsim\FlexnetOperations\Type\CreatedEntitlementLifeCycleDataListType  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedEntitlementLifeCycleDataListType $failedData = null, CreatedEntitlementLifeCycleDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedEntitlementLifeCycleDataListType  $failedData
     * @param  \Flexsim\FlexnetOperations\Type\CreatedEntitlementLifeCycleDataListType  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedEntitlementLifeCycleDataListType $failedData = null, CreatedEntitlementLifeCycleDataListType $responseData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\FailedEntitlementLifeCycleDataListType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedEntitlementLifeCycleDataListType  $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedEntitlementLifeCycleDataListType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CreatedEntitlementLifeCycleDataListType  $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;

        return $this;
    }
}
