<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUniformSuitesQueryRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SuiteQueryParametersType
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
     * @var bool
     */
    protected $returnContainedObjects;

    /**
     * Constructor
     *
     * @param int $pageNumber
     * @param int $batchSize
     * @param bool $returnContainedObjects
     * @param \Flexsim\FlexnetOperations\Type\SuiteQueryParametersType $queryParams
     */
    public function __construct(
        int $pageNumber,
        int $batchSize,
        bool $returnContainedObjects,
        \Flexsim\FlexnetOperations\Type\SuiteQueryParametersType $queryParams = []
    ) {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->returnContainedObjects = $returnContainedObjects;
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @param int $pageNumber
     * @param int $batchSize
     * @param bool $returnContainedObjects
     * @param \Flexsim\FlexnetOperations\Type\SuiteQueryParametersType $queryParams
     */
    public static function create(
        int $pageNumber,
        int $batchSize,
        bool $returnContainedObjects,
        \Flexsim\FlexnetOperations\Type\SuiteQueryParametersType $queryParams = []
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SuiteQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SuiteQueryParametersType $queryParams
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

    /**
     * @return bool
     */
    public function getReturnContainedObjects()
    {
        return $this->returnContainedObjects;
    }

    /**
     * @param bool $returnContainedObjects
     * @return $this
     */
    public function setReturnContainedObjects($returnContainedObjects)
    {
        $this->returnContainedObjects = $returnContainedObjects;

        return $this;
    }
}
