<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RenewEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType>|null
     */
    private $entitlementData;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType>|null  $entitlementData
     */
    public static function create(RenewEntitlementDataType|array|null $entitlementData = null)
    {
        return new static(...\func_get_args());
    }

    public function __construct(RenewEntitlementDataType $entitlementData)
    {
        $this->entitlementData = $entitlementData;
    }

    public function getEntitlementData(): RenewEntitlementDataType|array|null
    {
        return $this->entitlementData;
    }

    public function withEntitlementData(RenewEntitlementDataType|array|null $entitlementData): RenewEntitlementRequestType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }
}
