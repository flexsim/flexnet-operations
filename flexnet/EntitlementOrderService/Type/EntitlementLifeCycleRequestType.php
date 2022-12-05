<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EntitlementLifeCycleRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType>|null
     */
    private $entitlementData;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType>|null  $entitlementData
     */
    public static function create(EntitlementLifeCycleDataType|array|null $entitlementData = null)
    {
        return new static(...\func_get_args());
    }

    public function __construct(EntitlementLifeCycleDataType $entitlementData)
    {
        $this->entitlementData = $entitlementData;
    }

    public function getEntitlementData(): EntitlementLifeCycleDataType|array|null
    {
        return $this->entitlementData;
    }

    public function withEntitlementData(EntitlementLifeCycleDataType|array|null $entitlementData): EntitlementLifeCycleRequestType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }
}
