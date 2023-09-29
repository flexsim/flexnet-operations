<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class UpdateSimpleEntitlementResponseType extends Result
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
     */
    public function __construct(StatusInfoType $statusInfo, FailedUpdateSimpleEntitlementDataListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, FailedUpdateSimpleEntitlementDataListType $failedData = null)
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

    public function getFailedData(): ?FailedUpdateSimpleEntitlementDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedUpdateSimpleEntitlementDataListType $failedData): UpdateSimpleEntitlementResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
