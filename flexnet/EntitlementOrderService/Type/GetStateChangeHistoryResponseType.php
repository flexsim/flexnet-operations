<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStateChangeHistoryResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\StateChangeResponseType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeResponseType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, StateChangeResponseType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeResponseType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, StateChangeResponseType|null $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetStateChangeHistoryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): StateChangeResponseType|null
    {
        return $this->responseData;
    }

    public function withResponseData(StateChangeResponseType|null $responseData): GetStateChangeHistoryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
