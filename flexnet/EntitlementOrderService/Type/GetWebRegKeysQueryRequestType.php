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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntitlementIdentifier
     */
    public function __construct(EntitlementIdentifierType $bulkEntitlementIdentifier, int $batchSize, int $pageNumber)
    {
        $this->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntitlementIdentifier
     */
    public static function create(EntitlementIdentifierType $bulkEntitlementIdentifier, int $batchSize, int $pageNumber)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    public function getBulkEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->bulkEntitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntitlementIdentifier
     */
    public function withBulkEntitlementIdentifier(EntitlementIdentifierType $bulkEntitlementIdentifier): GetWebRegKeysQueryRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): GetWebRegKeysQueryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int $pageNumber): GetWebRegKeysQueryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
