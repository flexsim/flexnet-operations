<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class AddWebRegKeyResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\WebRegKeyDataListType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyDataListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, WebRegKeyDataListType|null $responseData = null, FailedAddWebRegKeyDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyDataListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, WebRegKeyDataListType|null $responseData = null, FailedAddWebRegKeyDataListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): AddWebRegKeyResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\WebRegKeyDataListType|null
     */
    public function getResponseData(): WebRegKeyDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyDataListType|null  $responseData
     */
    public function withResponseData(WebRegKeyDataListType|null $responseData): AddWebRegKeyResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataListType|null
     */
    public function getFailedData(): FailedAddWebRegKeyDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataListType|null  $failedData
     */
    public function withFailedData(FailedAddWebRegKeyDataListType|null $failedData): AddWebRegKeyResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
