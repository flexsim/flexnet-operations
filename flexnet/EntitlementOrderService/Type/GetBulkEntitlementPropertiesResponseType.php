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
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array|null $bulkEntitlement = null)
    {
        $this->statusInfo = $statusInfo;
        $this->bulkEntitlement = $bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array<\Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType>|null  $bulkEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array|null $bulkEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array<\Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType>|null
     */
    public function getBulkEntitlement(): \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array|null
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array<\Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType>|null  $bulkEntitlement
     */
    public function withBulkEntitlement(\Flexnet\EntitlementOrderService\Type\BulkEntitlementPropertiesType|array|null $bulkEntitlement): \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesResponseType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }
}
