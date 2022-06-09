<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDevicesRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType
     */
    protected $queryParams;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType|\Flexsim\FlexnetOperations\Type\v2DeviceResponseConfigRequestType
     */
    protected $deviceResponseConfig;

    /**
     * @var int
     */
    protected $pageNumber;

    /**
     * @var int
     */
    protected $batchSize;

    /**
     * Constructor
     *
     * @param int $pageNumber
     * @param int $batchSize
     * @param \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType $queryParams
     * @param \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType|\Flexsim\FlexnetOperations\Type\v2DeviceResponseConfigRequestType $deviceResponseConfig
     */
    public function __construct(
        int $pageNumber,
        int $batchSize,
        $queryParams = [],
        $deviceResponseConfig = null,
    ) {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
        $this->deviceResponseConfig = $deviceResponseConfig;
    }

    /**
     * create a new instance of this class
     *
     * @param int $pageNumber
     * @param int $batchSize
     * @param \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType $queryParams
     * @param \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType|\Flexsim\FlexnetOperations\Type\v2DeviceResponseConfigRequestType $deviceResponseConfig
     */
    public static function create(
        int $pageNumber,
        int $batchSize,
        $queryParams = [],
        $deviceResponseConfig = null,
    ) {
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
