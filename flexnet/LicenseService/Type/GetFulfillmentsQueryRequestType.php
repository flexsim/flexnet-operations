<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentsQueryRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null
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
     * @var bool|null
     */
    private $excludeInactiveObsoleteLineItems;

    /**
     * @var bool|null
     */
    private $includeConsolidatedHostLicense;

    /**
     * Constructor
     */
    public function __construct(int $pageNumber, int $batchSize, ?\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType $queryParams = null, ?bool $includeLicenseText = null, ?bool $excludeInactiveObsoleteLineItems = null, ?bool $includeConsolidatedHostLicense = null)
    {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
        $this->includeLicenseText = $includeLicenseText;
        $this->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;
        $this->includeConsolidatedHostLicense = $includeConsolidatedHostLicense;
    }

    public static function create(int $pageNumber, int $batchSize, ?\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType $queryParams = null, ?bool $includeLicenseText = null, ?bool $excludeInactiveObsoleteLineItems = null, ?bool $includeConsolidatedHostLicense = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType $queryParams): \Flexnet\LicenseService\Type\GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int $pageNumber): \Flexnet\LicenseService\Type\GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): \Flexnet\LicenseService\Type\GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getIncludeLicenseText(): ?bool
    {
        return $this->includeLicenseText;
    }

    public function withIncludeLicenseText(?bool $includeLicenseText): \Flexnet\LicenseService\Type\GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->includeLicenseText = $includeLicenseText;

        return $new;
    }

    public function getExcludeInactiveObsoleteLineItems(): ?bool
    {
        return $this->excludeInactiveObsoleteLineItems;
    }

    public function withExcludeInactiveObsoleteLineItems(?bool $excludeInactiveObsoleteLineItems): \Flexnet\LicenseService\Type\GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;

        return $new;
    }

    public function getIncludeConsolidatedHostLicense(): ?bool
    {
        return $this->includeConsolidatedHostLicense;
    }

    public function withIncludeConsolidatedHostLicense(?bool $includeConsolidatedHostLicense): \Flexnet\LicenseService\Type\GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->includeConsolidatedHostLicense = $includeConsolidatedHostLicense;

        return $new;
    }
}
