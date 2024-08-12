<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class UpdateBulkEntitlementResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataListType $failedData): \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
