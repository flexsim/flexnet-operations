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
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array|null $entitlement = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlement = $entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null  $entitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array|null $entitlement = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\SearchEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null
     */
    public function getEntitlement(): \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array|null
    {
        return $this->entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null  $entitlement
     */
    public function withEntitlement(\Flexnet\EntitlementOrderService\Type\EntitlementDataType|array|null $entitlement): \Flexnet\EntitlementOrderService\Type\SearchEntitlementResponseType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }
}
