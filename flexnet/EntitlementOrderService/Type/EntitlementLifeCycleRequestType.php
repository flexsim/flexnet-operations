<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EntitlementLifeCycleRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType
     */
    private $entitlementData;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType  $entitlementData
     */
    public static function create(EntitlementLifeCycleDataType $entitlementData)
    {
        return new static(...\func_get_args());
    }

    public function __construct(EntitlementLifeCycleDataType $entitlementData)
    {
        $this->entitlementData = $entitlementData;
    }

    public function getEntitlementData(): EntitlementLifeCycleDataType
    {
        return $this->entitlementData;
    }

    public function withEntitlementData(EntitlementLifeCycleDataType $entitlementData): EntitlementLifeCycleRequestType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }
}
