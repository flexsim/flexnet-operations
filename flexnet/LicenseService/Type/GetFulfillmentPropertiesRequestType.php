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
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType $queryParams, \Flexnet\LicenseService\Type\FulfillmentResponseConfigRequestType $fulfillmentResponseConfig, int $batchSize, ?int $pageNumber = null)
    {
        $this->queryParams = $queryParams;
        $this->fulfillmentResponseConfig = $fulfillmentResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    public static function create(\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType $queryParams, \Flexnet\LicenseService\Type\FulfillmentResponseConfigRequestType $fulfillmentResponseConfig, int $batchSize, ?int $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType $queryParams): \Flexnet\LicenseService\Type\GetFulfillmentPropertiesRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getFulfillmentResponseConfig(): \Flexnet\LicenseService\Type\FulfillmentResponseConfigRequestType
    {
        return $this->fulfillmentResponseConfig;
    }

    public function withFulfillmentResponseConfig(\Flexnet\LicenseService\Type\FulfillmentResponseConfigRequestType $fulfillmentResponseConfig): \Flexnet\LicenseService\Type\GetFulfillmentPropertiesRequestType
    {
        $new = clone $this;
        $new->fulfillmentResponseConfig = $fulfillmentResponseConfig;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): \Flexnet\LicenseService\Type\GetFulfillmentPropertiesRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): \Flexnet\LicenseService\Type\GetFulfillmentPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
