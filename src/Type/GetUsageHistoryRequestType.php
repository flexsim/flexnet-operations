<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUsageHistoryRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType
     */
    protected $queryParams;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType
     */
    protected $queryConfig;

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
     * @param \Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType $queryParams
     * @param \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType $queryConfig
     */
    public function __construct(
        int $pageNumber,
        int $batchSize,
        \Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType $queryParams = [],
        \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType $queryConfig = null
    ) {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
        $this->queryConfig = $queryConfig;
    }

    /**
     * create a new instance of this class
     *
     * @param int $pageNumber
     * @param int $batchSize
     * @param \Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType $queryParams
     * @param \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType $queryConfig
     */
    public static function create(
        int $pageNumber,
        int $batchSize,
        \Flexsim\FlexnetOperations\Type\GetUsageHistoryParametersType $queryParams = [],
        \Flexsim\FlexnetOperations\Type\GetUsageHistoryConfigType $queryConfig = null
    ) {
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
