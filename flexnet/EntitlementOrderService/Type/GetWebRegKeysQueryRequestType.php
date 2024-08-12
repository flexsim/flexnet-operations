<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetWebRegKeysQueryRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $bulkEntitlementIdentifier;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * @var int
     */
    private $pageNumber;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntitlementIdentifier, int $batchSize, int $pageNumber)
    {
        $this->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntitlementIdentifier, int $batchSize, int $pageNumber)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->bulkEntitlementIdentifier;
    }

    public function withBulkEntitlementIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntitlementIdentifier): \Flexnet\EntitlementOrderService\Type\GetWebRegKeysQueryRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): \Flexnet\EntitlementOrderService\Type\GetWebRegKeysQueryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int $pageNumber): \Flexnet\EntitlementOrderService\Type\GetWebRegKeysQueryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
