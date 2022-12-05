<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateSimpleEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType>
     */
    private $simpleEntitlement;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType>  $simpleEntitlement
     */
    public static function create(UpdateSimpleEntitlementDataType|array $simpleEntitlement)
    {
        return new static(...\func_get_args());
    }

    public function __construct(UpdateSimpleEntitlementDataType $simpleEntitlement)
    {
        $this->simpleEntitlement = $simpleEntitlement;
    }

    public function getSimpleEntitlement(): UpdateSimpleEntitlementDataType|array
    {
        return $this->simpleEntitlement;
    }

    public function withSimpleEntitlement(UpdateSimpleEntitlementDataType|array $simpleEntitlement): UpdateSimpleEntitlementRequestType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }
}
