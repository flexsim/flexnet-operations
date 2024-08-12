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
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType>|null  $entitlementData
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array|null $entitlementData = null)
    {
        $this->entitlementData = $entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType>|null  $entitlementData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array|null $entitlementData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType>|null
     */
    public function getEntitlementData(): \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array|null
    {
        return $this->entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType>|null  $entitlementData
     */
    public function withEntitlementData(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array|null $entitlementData): \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleRequestType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }
}
