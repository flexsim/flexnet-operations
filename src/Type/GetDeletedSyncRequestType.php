<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDeletedSyncRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetDeletedSyncParametersType
     */
    protected $queryParams;

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
     * @var \Flexsim\FlexnetOperations\Type\GetDeletedSyncParametersType $queryParams
     * @var int $pageNumber
     * @var int $batchSize
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GetDeletedSyncParametersType $queryParams = null, int $pageNumber, int $batchSize)
    {
        $queryParams = $queryParams ?? [];
        $this->queryParams = $queryParams;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\GetDeletedSyncParametersType $queryParams
     * @var int $pageNumber
     * @var int $batchSize
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GetDeletedSyncParametersType $queryParams = null, int $pageNumber, int $batchSize)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetDeletedSyncParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetDeletedSyncParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
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
