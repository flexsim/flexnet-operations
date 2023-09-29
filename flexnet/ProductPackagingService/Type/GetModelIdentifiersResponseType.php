<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class GetModelIdentifiersResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\ModelIdentifiersDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, ModelIdentifiersDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, ModelIdentifiersDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetModelIdentifiersResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?ModelIdentifiersDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?ModelIdentifiersDataListType $responseData): GetModelIdentifiersResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
