<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDevicesRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType
     */
    private $queryParams;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType|\Flexsim\FlexnetOperations\Type\v2DeviceResponseConfigRequestType
     */
    private $deviceResponseConfig;

    /**
     * @var int
     */
    private $pageNumber;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType $queryParams
     * @var \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType|\Flexsim\FlexnetOperations\Type\v2DeviceResponseConfigRequestType $deviceResponseConfig
     * @var int $pageNumber
     * @var int $batchSize
     */
    public function __construct($queryParams = null, $deviceResponseConfig = null, int $pageNumber, int $batchSize)
    {
        $queryParams = $queryParams ?? [];
        $this->queryParams = $queryParams;
        $this->deviceResponseConfig = $deviceResponseConfig;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType $queryParams
     * @var \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType|\Flexsim\FlexnetOperations\Type\v2DeviceResponseConfigRequestType $deviceResponseConfig
     * @var int $pageNumber
     * @var int $batchSize
     */
    public static function create($queryParams = null, $deviceResponseConfig = null, int $pageNumber, int $batchSize)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType|\Flexsim\FlexnetOperations\Type\v2DeviceResponseConfigRequestType
     */
    public function getDeviceResponseConfig()
    {
        return $this->deviceResponseConfig;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType|\Flexsim\FlexnetOperations\Type\v2DeviceResponseConfigRequestType $deviceResponseConfig
     * @return $this
     */
    public function setDeviceResponseConfig($deviceResponseConfig)
    {
        $this->deviceResponseConfig = $deviceResponseConfig;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getBatchSize()
    {
        return $this->batchSize;
    }

    /**
     * @param int $batchSize
     * @return $this
     */
    public function setBatchSize($batchSize)
    {
        $this->batchSize = $batchSize;
        return $this;
    }
}
