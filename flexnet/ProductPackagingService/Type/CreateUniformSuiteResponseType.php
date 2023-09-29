<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class CreateUniformSuiteResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedUniformSuiteDataListType $failedData = null, CreatedUniformSuiteDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, FailedUniformSuiteDataListType $failedData = null, CreatedUniformSuiteDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): CreateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedUniformSuiteDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedUniformSuiteDataListType $failedData): CreateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?CreatedUniformSuiteDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?CreatedUniformSuiteDataListType $responseData): CreateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
