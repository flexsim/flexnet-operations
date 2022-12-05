<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateSimpleEntitlementResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedUpdateSimpleEntitlementDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedUpdateSimpleEntitlementDataListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): UpdateSimpleEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): FailedUpdateSimpleEntitlementDataListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedUpdateSimpleEntitlementDataListType|null $failedData): UpdateSimpleEntitlementResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
