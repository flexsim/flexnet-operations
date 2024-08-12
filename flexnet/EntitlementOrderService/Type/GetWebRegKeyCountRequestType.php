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
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntitlementIdentifier)
    {
        $this->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntitlementIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->bulkEntitlementIdentifier;
    }

    public function withBulkEntitlementIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntitlementIdentifier): \Flexnet\EntitlementOrderService\Type\GetWebRegKeyCountRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;

        return $new;
    }
}
