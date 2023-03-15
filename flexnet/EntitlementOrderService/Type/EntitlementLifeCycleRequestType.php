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
    public function __construct(EntitlementLifeCycleDataType|array|null $entitlementData = null)
    {
        $this->entitlementData = $entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType>|null  $entitlementData
     */
    public static function create(EntitlementLifeCycleDataType|array|null $entitlementData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType>|null
     */
    public function getEntitlementData(): EntitlementLifeCycleDataType|array|null
    {
        return $this->entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType>|null  $entitlementData
     */
    public function withEntitlementData(EntitlementLifeCycleDataType|array|null $entitlementData): EntitlementLifeCycleRequestType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }
}
