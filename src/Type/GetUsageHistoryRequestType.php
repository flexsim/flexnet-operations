<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUsageHistoryRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType
     */
    private $queryParams;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType
     */
    private $queryConfig;

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
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType $queryParams
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType $queryConfig
     * @var int $pageNumber
     * @var int $batchSize
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType $queryParams = null, \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType $queryConfig = null, int $pageNumber, int $batchSize)
    {
        $this->queryParams = $queryParams;
        $this->queryConfig = $queryConfig;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType $queryParams
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType $queryConfig
     * @var int $pageNumber
     * @var int $batchSize
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType $queryParams = null, \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType $queryConfig = null, int $pageNumber, int $batchSize)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType
     */
    public function getQueryConfig()
    {
        return $this->queryConfig;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType $queryConfig
     * @return $this
     */
    public function setQueryConfig($queryConfig)
    {
        $this->queryConfig = $queryConfig;
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

