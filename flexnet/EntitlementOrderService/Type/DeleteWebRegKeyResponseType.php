<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteWebRegKeyResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedDeleteWebRegKeyListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedDeleteWebRegKeyListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): DeleteWebRegKeyResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): FailedDeleteWebRegKeyListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedDeleteWebRegKeyListType|null $failedData): DeleteWebRegKeyResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
