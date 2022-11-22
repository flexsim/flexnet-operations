<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateUniformSuiteResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataListType
     */
    protected $failedData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataListType
     */
    protected $responseData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataListType  $failedData
     * @param  \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataListType  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedUniformSuiteDataListType $failedData = null, CreatedUniformSuiteDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataListType  $failedData
     * @param  \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataListType  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedUniformSuiteDataListType $failedData = null, CreatedUniformSuiteDataListType $responseData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataListType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataListType  $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataListType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataListType  $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;

        return $this;
    }
}
