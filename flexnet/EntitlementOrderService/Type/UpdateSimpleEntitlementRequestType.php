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
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType>  $simpleEntitlement
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|array $simpleEntitlement)
    {
        $this->simpleEntitlement = $simpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType>  $simpleEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|array $simpleEntitlement)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType>
     */
    public function getSimpleEntitlement(): \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|array
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType>  $simpleEntitlement
     */
    public function withSimpleEntitlement(\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|array $simpleEntitlement): \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementRequestType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }
}
