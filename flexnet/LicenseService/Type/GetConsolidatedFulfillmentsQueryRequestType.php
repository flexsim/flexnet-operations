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
     * @param \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams
     * @param int $pageNumber
     * @param int $batchSize
     * @param bool|null $includeLicenseText
     */
    public function __construct(\Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams = null, int $pageNumber, int $batchSize, bool|null $includeLicenseText = null)
    {
        $this->queryParams = $queryParams;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->includeLicenseText = $includeLicenseText;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams
     * @param int $pageNumber
     * @param int $batchSize
     * @param bool|null $includeLicenseText
     */
    public static function create(\Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams = null, int $pageNumber, int $batchSize, bool|null $includeLicenseText = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null
     */
    public function getQueryParams() : \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams
     * @return GetConsolidatedFulfillmentsQueryRequestType
     */
    public function withQueryParams(\Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    /**
     * @return int
     */
    public function getPageNumber() : int
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return GetConsolidatedFulfillmentsQueryRequestType
     */
    public function withPageNumber(int $pageNumber) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    /**
     * @return int
     */
    public function getBatchSize() : int
    {
        return $this->batchSize;
    }

    /**
     * @param int $batchSize
     * @return GetConsolidatedFulfillmentsQueryRequestType
     */
    public function withBatchSize(int $batchSize) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIncludeLicenseText() : bool|null
    {
        return $this->includeLicenseText;
    }

    /**
     * @param bool|null $includeLicenseText
     * @return GetConsolidatedFulfillmentsQueryRequestType
     */
    public function withIncludeLicenseText(bool|null $includeLicenseText) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryRequestType
    {
        $new = clone $this;
        $new->includeLicenseText = $includeLicenseText;

        return $new;
    }
}

