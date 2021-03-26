<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUsersQueryRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserQueryParametersType
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
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserQueryParametersType $queryParams
     * @var int $pageNumber
     * @var int $batchSize
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UserQueryParametersType $queryParams = null, int $pageNumber, int $batchSize)
    {
        $this->queryParams = $queryParams;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserQueryParametersType $queryParams
     * @var int $pageNumber
     * @var int $batchSize
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UserQueryParametersType $queryParams = null, int $pageNumber, int $batchSize)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserQueryParametersType $queryParams
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
