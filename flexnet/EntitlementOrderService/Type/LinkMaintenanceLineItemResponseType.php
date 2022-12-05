<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LinkMaintenanceLineItemResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedLinkMaintenanceLineItemListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedLinkMaintenanceLineItemListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): LinkMaintenanceLineItemResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): FailedLinkMaintenanceLineItemListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedLinkMaintenanceLineItemListType|null $failedData): LinkMaintenanceLineItemResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
