<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPartNumbersQueryRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType
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
     * @param  int  $pageNumber
     * @param  int  $batchSize
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType  $queryParams
     */
    public function __construct(
        int $pageNumber,
        int $batchSize,
        PartNumberQueryParametersType $queryParams = []
    ) {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @param  int  $pageNumber
     * @param  int  $batchSize
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType  $queryParams
     */
    public static function create(
        int $pageNumber,
        int $batchSize,
        PartNumberQueryParametersType $queryParams = []
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType  $queryParams
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
