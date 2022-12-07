<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RemoveEntitlementLineItemResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedRemoveEntitlementLineItemDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedRemoveEntitlementLineItemDataListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @return RemoveEntitlementLineItemResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): RemoveEntitlementLineItemResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataListType|null
     */
    public function getFailedData(): FailedRemoveEntitlementLineItemDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataListType|null  $failedData
     * @return RemoveEntitlementLineItemResponseType
     */
    public function withFailedData(FailedRemoveEntitlementLineItemDataListType|null $failedData): RemoveEntitlementLineItemResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
