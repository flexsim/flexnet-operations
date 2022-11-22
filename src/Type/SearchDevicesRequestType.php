<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchDevicesRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchDevicesParametersType
     */
    protected $queryParams;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchDeviceResponseConfigType
     */
    protected $responseConfig;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceSortBys
     */
    protected $sortBys;

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
     * @param  \Flexsim\FlexnetOperations\Type\SearchDevicesParametersType  $queryParams
     * @param  \Flexsim\FlexnetOperations\Type\SearchDeviceResponseConfigType  $responseConfig
     * @param  \Flexsim\FlexnetOperations\Type\DeviceSortBys  $sortBys
     * @param  int  $pageNumber
     * @param  int  $batchSize
     */
    public function __construct(SearchDevicesParametersType $queryParams = null, SearchDeviceResponseConfigType $responseConfig = null, DeviceSortBys $sortBys = null, int $pageNumber = null, int $batchSize = null)
    {
        $queryParams = $queryParams ?? [];
        $this->queryParams = $queryParams;
        $this->responseConfig = $responseConfig;
        $this->sortBys = $sortBys;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\SearchDevicesParametersType  $queryParams
     * @param  \Flexsim\FlexnetOperations\Type\SearchDeviceResponseConfigType  $responseConfig
     * @param  \Flexsim\FlexnetOperations\Type\DeviceSortBys  $sortBys
     * @param  int  $pageNumber
     * @param  int  $batchSize
     */
    public static function create(SearchDevicesParametersType $queryParams = null, SearchDeviceResponseConfigType $responseConfig = null, DeviceSortBys $sortBys = null, int $pageNumber = null, int $batchSize = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchDevicesParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SearchDevicesParametersType  $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchDeviceResponseConfigType
     */
    public function getResponseConfig()
    {
        return $this->responseConfig;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SearchDeviceResponseConfigType  $responseConfig
     * @return $this
     */
    public function setResponseConfig($responseConfig)
    {
        $this->responseConfig = $responseConfig;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceSortBys
     */
    public function getSortBys()
    {
        return $this->sortBys;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DeviceSortBys  $sortBys
     * @return $this
     */
    public function setSortBys($sortBys)
    {
        $this->sortBys = $sortBys;

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
     * @param  int  $pageNumber
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
     * @param  int  $batchSize
     * @return $this
     */
    public function setBatchSize($batchSize)
    {
        $this->batchSize = $batchSize;

        return $this;
    }
}
