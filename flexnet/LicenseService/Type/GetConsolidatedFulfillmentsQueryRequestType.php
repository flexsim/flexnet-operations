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
     *
     * @param  \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null  $queryParams
     * @param  bool|null  $includeLicenseText
     */
    public function __construct(int $pageNumber, int $batchSize, ConsolidatedFulfillmentsQPType|null $queryParams = null, bool|null $includeLicenseText = null)
    {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
        $this->includeLicenseText = $includeLicenseText;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null  $queryParams
     * @param  bool|null  $includeLicenseText
     */
    public static function create(int $pageNumber, int $batchSize, ConsolidatedFulfillmentsQPType|null $queryParams = null, bool|null $includeLicenseText = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null
     */
    public function getQueryParams(): ConsolidatedFulfillmentsQPType|null
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null  $queryParams
     */
    public function withQueryParams(ConsolidatedFulfillmentsQPType|null $queryParams): GetConsolidatedFulfillmentsQueryRequestType
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

    public function getIncludeLicenseText(): bool|null
    {
        return $this->includeLicenseText;
    }

    public function withIncludeLicenseText(bool|null $includeLicenseText): GetConsolidatedFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->includeLicenseText = $includeLicenseText;

        return $new;
    }
}
