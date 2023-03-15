<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
     */
    private $entitlementSearchCriteria;

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
     * @param  \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType  $entitlementSearchCriteria
     * @param  int|null  $pageNumber
     */
    public function __construct(SearchEntitlementDataType $entitlementSearchCriteria, int $batchSize, int|null $pageNumber = null)
    {
        $this->entitlementSearchCriteria = $entitlementSearchCriteria;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType  $entitlementSearchCriteria
     * @param  int|null  $pageNumber
     */
    public static function create(SearchEntitlementDataType $entitlementSearchCriteria, int $batchSize, int|null $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
     */
    public function getEntitlementSearchCriteria(): SearchEntitlementDataType
    {
        return $this->entitlementSearchCriteria;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType  $entitlementSearchCriteria
     */
    public function withEntitlementSearchCriteria(SearchEntitlementDataType $entitlementSearchCriteria): SearchEntitlementRequestType
    {
        $new = clone $this;
        $new->entitlementSearchCriteria = $entitlementSearchCriteria;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): SearchEntitlementRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): int|null
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int|null $pageNumber): SearchEntitlementRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
