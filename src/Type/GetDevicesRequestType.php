<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDevicesRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetDevicesParametersType
     */
    private $queryParams;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType
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
     * @var \Flexsim\FlexnetOperations\Type\GetDevicesParametersType $queryParams
     * @var \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType $deviceResponseConfig
     * @var int $pageNumber
     * @var int $batchSize
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GetDevicesParametersType $queryParams = null, \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType $deviceResponseConfig = null, int $pageNumber, int $batchSize)
    {
        $this->queryParams = $queryParams;
        $this->deviceResponseConfig = $deviceResponseConfig;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\GetDevicesParametersType $queryParams
     * @var \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType $deviceResponseConfig
     * @var int $pageNumber
     * @var int $batchSize
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GetDevicesParametersType $queryParams = null, \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType $deviceResponseConfig = null, int $pageNumber, int $batchSize)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetDevicesParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetDevicesParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType
     */
    public function getDeviceResponseConfig()
    {
        return $this->deviceResponseConfig;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType $deviceResponseConfig
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

