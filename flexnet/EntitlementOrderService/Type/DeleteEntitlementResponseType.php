<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class DeleteEntitlementResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedDeleteEntitlementDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedDeleteEntitlementDataListType|null $failedData = null)
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
     */
    public function withStatusInfo(StatusInfoType $statusInfo): DeleteEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataListType|null
     */
    public function getFailedData(): FailedDeleteEntitlementDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataListType|null  $failedData
     */
    public function withFailedData(FailedDeleteEntitlementDataListType|null $failedData): DeleteEntitlementResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
