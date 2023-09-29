<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class CreatePartNumberResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedPartNumberDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedPartNumberDataListType $failedData = null, CreatedPartNumberDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, FailedPartNumberDataListType $failedData = null, CreatedPartNumberDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): CreatePartNumberResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedPartNumberDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedPartNumberDataListType $failedData): CreatePartNumberResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?CreatedPartNumberDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?CreatedPartNumberDataListType $responseData): CreatePartNumberResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
