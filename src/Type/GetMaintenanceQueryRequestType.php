<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMaintenanceQueryRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType
     */
    private $queryParams;

    /**
     * @var int
     */
    private $pageNumber;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * @var bool
     */
    private $returnContainedObjects;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType $queryParams
     * @var int $pageNumber
     * @var int $batchSize
     * @var bool $returnContainedObjects
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType $queryParams = null, int $pageNumber, int $batchSize, bool $returnContainedObjects)
    {
        $this->queryParams = $queryParams;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->returnContainedObjects = $returnContainedObjects;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType $queryParams
     * @var int $pageNumber
     * @var int $batchSize
     * @var bool $returnContainedObjects
     */
    public static function create(\Flexsim\FlexnetOperations\Type\MaintenanceQueryParametersType $queryParams = null, int $pageNumber, int $batchSize, bool $returnContainedObjects)
    {
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

