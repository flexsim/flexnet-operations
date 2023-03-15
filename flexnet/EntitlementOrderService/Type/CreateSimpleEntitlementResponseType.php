<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateSimpleEntitlementResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataListType|null  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedSimpleEntitlementDataListType|null $failedData = null, CreatedSimpleEntitlementDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataListType|null  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedSimpleEntitlementDataListType|null $failedData = null, CreatedSimpleEntitlementDataListType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): CreateSimpleEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataListType|null
     */
    public function getFailedData(): FailedSimpleEntitlementDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataListType|null  $failedData
     */
    public function withFailedData(FailedSimpleEntitlementDataListType|null $failedData): CreateSimpleEntitlementResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataListType|null
     */
    public function getResponseData(): CreatedSimpleEntitlementDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataListType|null  $responseData
     */
    public function withResponseData(CreatedSimpleEntitlementDataListType|null $responseData): CreateSimpleEntitlementResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
