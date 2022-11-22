<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentPropertiesRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType
     */
    protected $queryParams;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentResponseConfigRequestType
     */
    protected $fulfillmentResponseConfig;

    /**
     * @var int
     */
    protected $batchSize;

    /**
     * @var int
     */
    protected $pageNumber;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType  $queryParams
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentResponseConfigRequestType  $fulfillmentResponseConfig
     * @param  int  $batchSize
     * @param  int  $pageNumber
     */
    public function __construct(FulfillmentsQueryParametersType $queryParams, FulfillmentResponseConfigRequestType $fulfillmentResponseConfig, int $batchSize, int $pageNumber = null)
    {
        $this->queryParams = $queryParams;
        $this->fulfillmentResponseConfig = $fulfillmentResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType  $queryParams
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentResponseConfigRequestType  $fulfillmentResponseConfig
     * @param  int  $batchSize
     * @param  int  $pageNumber
     */
    public static function create(FulfillmentsQueryParametersType $queryParams, FulfillmentResponseConfigRequestType $fulfillmentResponseConfig, int $batchSize, int $pageNumber = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType  $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentResponseConfigRequestType
     */
    public function getFulfillmentResponseConfig()
    {
        return $this->fulfillmentResponseConfig;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentResponseConfigRequestType  $fulfillmentResponseConfig
     * @return $this
     */
    public function setFulfillmentResponseConfig($fulfillmentResponseConfig)
    {
        $this->fulfillmentResponseConfig = $fulfillmentResponseConfig;

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
}
