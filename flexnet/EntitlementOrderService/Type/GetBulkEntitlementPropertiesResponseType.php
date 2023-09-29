<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class GetBulkEntitlementPropertiesResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array<\Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType>|null
     */
    private $bulkEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array<\Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType>|null  $bulkEntitlement
     */
    public function __construct(StatusInfoType $statusInfo, BulkEntitlementPropertiesType|array $bulkEntitlement = null)
    {
        $this->statusInfo = $statusInfo;
        $this->bulkEntitlement = $bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array<\Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType>|null  $bulkEntitlement
     */
    public static function create(StatusInfoType $statusInfo, BulkEntitlementPropertiesType|array $bulkEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetBulkEntitlementPropertiesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array<\Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType>|null
     */
    public function getBulkEntitlement(): BulkEntitlementPropertiesType|array|null
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array<\Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType>|null  $bulkEntitlement
     */
    public function withBulkEntitlement(BulkEntitlementPropertiesType|array|null $bulkEntitlement): GetBulkEntitlementPropertiesResponseType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }
}
