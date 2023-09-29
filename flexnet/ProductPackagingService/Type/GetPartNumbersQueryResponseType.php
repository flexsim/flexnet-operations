<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class GetPartNumbersQueryResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, PartNumberDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, PartNumberDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetPartNumbersQueryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?PartNumberDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?PartNumberDataListType $responseData): GetPartNumbersQueryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
