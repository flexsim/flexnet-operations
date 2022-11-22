<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteAddonLineItemsResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteFailAddonDataListType
     */
    protected $failedData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SuccessAddonDataListType
     */
    protected $responseData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\DeleteFailAddonDataListType  $failedData
     * @param  \Flexsim\FlexnetOperations\Type\SuccessAddonDataListType  $responseData
     */
    public function __construct(OpsEmbeddedStatusInfoType $statusInfo, DeleteFailAddonDataListType $failedData = null, SuccessAddonDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\DeleteFailAddonDataListType  $failedData
     * @param  \Flexsim\FlexnetOperations\Type\SuccessAddonDataListType  $responseData
     */
    public static function create(OpsEmbeddedStatusInfoType $statusInfo, DeleteFailAddonDataListType $failedData = null, SuccessAddonDataListType $responseData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteFailAddonDataListType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DeleteFailAddonDataListType  $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SuccessAddonDataListType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SuccessAddonDataListType  $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;

        return $this;
    }
}
