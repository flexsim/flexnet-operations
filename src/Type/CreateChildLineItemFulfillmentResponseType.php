<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateChildLineItemFulfillmentResponseType extends FlexnetType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedChildLIFmtResponseDataType
     */
    protected $responseData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedChildLIFmtResponseDataType
     */
    protected $failedData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\CreatedChildLIFmtResponseDataType $responseData
     * @var \Flexsim\FlexnetOperations\Type\FailedChildLIFmtResponseDataType $failedData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\CreatedChildLIFmtResponseDataType $responseData = null, \Flexsim\FlexnetOperations\Type\FailedChildLIFmtResponseDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\CreatedChildLIFmtResponseDataType $responseData
     * @var \Flexsim\FlexnetOperations\Type\FailedChildLIFmtResponseDataType $failedData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\CreatedChildLIFmtResponseDataType $responseData = null, \Flexsim\FlexnetOperations\Type\FailedChildLIFmtResponseDataType $failedData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\CreatedChildLIFmtResponseDataType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedChildLIFmtResponseDataType $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedChildLIFmtResponseDataType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedChildLIFmtResponseDataType $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;
        return $this;
    }
}
