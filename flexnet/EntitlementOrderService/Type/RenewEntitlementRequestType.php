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
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType>|null  $entitlementData
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType|array|null $entitlementData = null)
    {
        $this->entitlementData = $entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType>|null  $entitlementData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType|array|null $entitlementData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType>|null
     */
    public function getEntitlementData(): \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType|array|null
    {
        return $this->entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType>|null  $entitlementData
     */
    public function withEntitlementData(\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType|array|null $entitlementData): \Flexnet\EntitlementOrderService\Type\RenewEntitlementRequestType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }
}
