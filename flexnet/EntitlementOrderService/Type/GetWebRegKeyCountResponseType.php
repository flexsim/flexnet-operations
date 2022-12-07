<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetWebRegKeyCountResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\WebRegKeyCountDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyCountDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, WebRegKeyCountDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyCountDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, WebRegKeyCountDataType|null $responseData = null)
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
     * @return GetWebRegKeyCountResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): GetWebRegKeyCountResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\WebRegKeyCountDataType|null
     */
    public function getResponseData(): WebRegKeyCountDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyCountDataType|null  $responseData
     * @return GetWebRegKeyCountResponseType
     */
    public function withResponseData(WebRegKeyCountDataType|null $responseData): GetWebRegKeyCountResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
