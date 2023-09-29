<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetConsolidatedFulfillmentsQueryRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null
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
     * @var bool|null
     */
    private $includeLicenseText;

    /**
     * Constructor
     */
    public function __construct(int $pageNumber, int $batchSize, ConsolidatedFulfillmentsQPType $queryParams = null, bool $includeLicenseText = null)
    {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
        $this->includeLicenseText = $includeLicenseText;
    }

    public static function create(int $pageNumber, int $batchSize, ConsolidatedFulfillmentsQPType $queryParams = null, bool $includeLicenseText = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?ConsolidatedFulfillmentsQPType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?ConsolidatedFulfillmentsQPType $queryParams): GetConsolidatedFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int $pageNumber): GetConsolidatedFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): GetConsolidatedFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getIncludeLicenseText(): ?bool
    {
        return $this->includeLicenseText;
    }

    public function withIncludeLicenseText(?bool $includeLicenseText): GetConsolidatedFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->includeLicenseText = $includeLicenseText;

        return $new;
    }
}
