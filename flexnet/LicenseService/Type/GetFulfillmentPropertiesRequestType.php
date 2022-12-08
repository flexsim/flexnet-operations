<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentPropertiesRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
     */
    private $queryParams;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentResponseConfigRequestType
     */
    private $fulfillmentResponseConfig;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * @var int|null
     */
    private $pageNumber;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType  $queryParams
     * @param  \Flexnet\LicenseService\Type\FulfillmentResponseConfigRequestType  $fulfillmentResponseConfig
     * @param  int  $batchSize
     * @param  int|null  $pageNumber
     */
    public function __construct(FulfillmentsQueryParametersType $queryParams, FulfillmentResponseConfigRequestType $fulfillmentResponseConfig, int $batchSize, int|null $pageNumber = null)
    {
        $this->queryParams = $queryParams;
        $this->fulfillmentResponseConfig = $fulfillmentResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType  $queryParams
     * @param  \Flexnet\LicenseService\Type\FulfillmentResponseConfigRequestType  $fulfillmentResponseConfig
     * @param  int  $batchSize
     * @param  int|null  $pageNumber
     */
    public static function create(FulfillmentsQueryParametersType $queryParams, FulfillmentResponseConfigRequestType $fulfillmentResponseConfig, int $batchSize, int|null $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
     */
    public function getQueryParams(): FulfillmentsQueryParametersType
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType  $queryParams
     * @return GetFulfillmentPropertiesRequestType
     */
    public function withQueryParams(FulfillmentsQueryParametersType $queryParams): GetFulfillmentPropertiesRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentResponseConfigRequestType
     */
    public function getFulfillmentResponseConfig(): FulfillmentResponseConfigRequestType
    {
        return $this->fulfillmentResponseConfig;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentResponseConfigRequestType  $fulfillmentResponseConfig
     * @return GetFulfillmentPropertiesRequestType
     */
    public function withFulfillmentResponseConfig(FulfillmentResponseConfigRequestType $fulfillmentResponseConfig): GetFulfillmentPropertiesRequestType
    {
        $new = clone $this;
        $new->fulfillmentResponseConfig = $fulfillmentResponseConfig;

        return $new;
    }

    /**
     * @return int
     */
    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    /**
     * @param  int  $batchSize
     * @return GetFulfillmentPropertiesRequestType
     */
    public function withBatchSize(int $batchSize): GetFulfillmentPropertiesRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getPageNumber(): int|null
    {
        return $this->pageNumber;
    }

    /**
     * @param  int|null  $pageNumber
     * @return GetFulfillmentPropertiesRequestType
     */
    public function withPageNumber(int|null $pageNumber): GetFulfillmentPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
