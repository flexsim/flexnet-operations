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
    public function __construct(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataListType $failedData = null, ?\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataListType $failedData = null, ?\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\ProductPackagingService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo): \Flexnet\ProductPackagingService\Type\CreateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataListType $failedData): \Flexnet\ProductPackagingService\Type\CreateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataListType $responseData): \Flexnet\ProductPackagingService\Type\CreateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
