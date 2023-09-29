<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetWebRegKeyCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $bulkEntitlementIdentifier;

    /**
     * Constructor
     */
    public function __construct(EntitlementIdentifierType $bulkEntitlementIdentifier)
    {
        $this->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;
    }

    public static function create(EntitlementIdentifierType $bulkEntitlementIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->bulkEntitlementIdentifier;
    }

    public function withBulkEntitlementIdentifier(EntitlementIdentifierType $bulkEntitlementIdentifier): GetWebRegKeyCountRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;

        return $new;
    }
}
