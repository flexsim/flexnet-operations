<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType>
     */
    private $entitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType>  $entitlement
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array $entitlement)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType>  $entitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array $entitlement)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType>
     */
    public function getEntitlement(): \Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array
    {
        return $this->entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType>  $entitlement
     */
    public function withEntitlement(\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array $entitlement): \Flexnet\EntitlementOrderService\Type\DeleteEntitlementRequestType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }
}
