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
     */
    public function __construct(StatusInfoType $statusInfo, WebRegKeyDataListType $responseData = null, FailedAddWebRegKeyDataListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, WebRegKeyDataListType $responseData = null, FailedAddWebRegKeyDataListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): AddWebRegKeyResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?WebRegKeyDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?WebRegKeyDataListType $responseData): AddWebRegKeyResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?FailedAddWebRegKeyDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedAddWebRegKeyDataListType $failedData): AddWebRegKeyResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
