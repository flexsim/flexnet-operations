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
     *
     * @param  int  $pageNumber
     * @param  int  $batchSize
     * @param  \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null  $queryParams
     * @param  bool|null  $includeLicenseText
     * @param  bool|null  $excludeInactiveObsoleteLineItems
     * @param  bool|null  $includeConsolidatedHostLicense
     */
    public function __construct(int $pageNumber, int $batchSize, FulfillmentsQueryParametersType|null $queryParams = null, bool|null $includeLicenseText = null, bool|null $excludeInactiveObsoleteLineItems = null, bool|null $includeConsolidatedHostLicense = null)
    {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
        $this->includeLicenseText = $includeLicenseText;
        $this->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;
        $this->includeConsolidatedHostLicense = $includeConsolidatedHostLicense;
    }

    /**
     * @param  int  $pageNumber
     * @param  int  $batchSize
     * @param  \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null  $queryParams
     * @param  bool|null  $includeLicenseText
     * @param  bool|null  $excludeInactiveObsoleteLineItems
     * @param  bool|null  $includeConsolidatedHostLicense
     */
    public static function create(int $pageNumber, int $batchSize, FulfillmentsQueryParametersType|null $queryParams = null, bool|null $includeLicenseText = null, bool|null $excludeInactiveObsoleteLineItems = null, bool|null $includeConsolidatedHostLicense = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null
     */
    public function getQueryParams(): FulfillmentsQueryParametersType|null
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null  $queryParams
     * @return GetFulfillmentsQueryRequestType
     */
    public function withQueryParams(FulfillmentsQueryParametersType|null $queryParams): GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    /**
     * @return int
     */
    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    /**
     * @param  int  $pageNumber
     * @return GetFulfillmentsQueryRequestType
     */
    public function withPageNumber(int $pageNumber): GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

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
     * @return GetFulfillmentsQueryRequestType
     */
    public function withBatchSize(int $batchSize): GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIncludeLicenseText(): bool|null
    {
        return $this->includeLicenseText;
    }

    /**
     * @param  bool|null  $includeLicenseText
     * @return GetFulfillmentsQueryRequestType
     */
    public function withIncludeLicenseText(bool|null $includeLicenseText): GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->includeLicenseText = $includeLicenseText;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getExcludeInactiveObsoleteLineItems(): bool|null
    {
        return $this->excludeInactiveObsoleteLineItems;
    }

    /**
     * @param  bool|null  $excludeInactiveObsoleteLineItems
     * @return GetFulfillmentsQueryRequestType
     */
    public function withExcludeInactiveObsoleteLineItems(bool|null $excludeInactiveObsoleteLineItems): GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIncludeConsolidatedHostLicense(): bool|null
    {
        return $this->includeConsolidatedHostLicense;
    }

    /**
     * @param  bool|null  $includeConsolidatedHostLicense
     * @return GetFulfillmentsQueryRequestType
     */
    public function withIncludeConsolidatedHostLicense(bool|null $includeConsolidatedHostLicense): GetFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->includeConsolidatedHostLicense = $includeConsolidatedHostLicense;

        return $new;
    }
}
