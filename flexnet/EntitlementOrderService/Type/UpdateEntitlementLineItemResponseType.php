<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateEntitlementLineItemResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedUpdateEntitlementLineItemDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedUpdateEntitlementLineItemDataListType|null $failedData = null)
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
     * @return UpdateEntitlementLineItemResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): UpdateEntitlementLineItemResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataListType|null
     */
    public function getFailedData(): FailedUpdateEntitlementLineItemDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataListType|null  $failedData
     * @return UpdateEntitlementLineItemResponseType
     */
    public function withFailedData(FailedUpdateEntitlementLineItemDataListType|null $failedData): UpdateEntitlementLineItemResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
