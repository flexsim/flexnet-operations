<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMaintenanceQueryRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType
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
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType $queryParams
     * @param bool $returnContainedObjects
     */
    public function __construct(
        int $pageNumber,
        int $batchSize,
        \Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType $queryParams = [],
        bool $returnContainedObjects
    ) {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
        $this->returnContainedObjects = $returnContainedObjects;
    }

    /**
     * create a new instance of this class
     *
     * @param int $pageNumber
     * @param int $batchSize
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType $queryParams
     * @param bool $returnContainedObjects
     */
    public static function create(
        int $pageNumber,
        int $batchSize,
        \Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType $queryParams = [],
        bool $returnContainedObjects
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType $queryParams
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
