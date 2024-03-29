<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class SearchEntitlementResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null
     */
    private $entitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null  $entitlement
     */
    public function __construct(StatusInfoType $statusInfo, EntitlementDataType|array $entitlement = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlement = $entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null  $entitlement
     */
    public static function create(StatusInfoType $statusInfo, EntitlementDataType|array $entitlement = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): SearchEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null
     */
    public function getEntitlement(): EntitlementDataType|array|null
    {
        return $this->entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null  $entitlement
     */
    public function withEntitlement(EntitlementDataType|array|null $entitlement): SearchEntitlementResponseType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }
}
