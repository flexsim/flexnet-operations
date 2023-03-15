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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntitlementIdentifier
     */
    public function __construct(EntitlementIdentifierType $bulkEntitlementIdentifier)
    {
        $this->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntitlementIdentifier
     */
    public static function create(EntitlementIdentifierType $bulkEntitlementIdentifier)
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
    public function withBulkEntitlementIdentifier(EntitlementIdentifierType $bulkEntitlementIdentifier): GetWebRegKeyCountRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;

        return $new;
    }
}
