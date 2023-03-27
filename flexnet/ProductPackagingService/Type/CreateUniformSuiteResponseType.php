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
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedUniformSuiteDataListType|null $failedData = null, CreatedUniformSuiteDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedUniformSuiteDataListType|null $failedData = null, CreatedUniformSuiteDataListType|null $responseData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     */
    public function withStatusInfo(StatusInfoType $statusInfo): CreateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataListType|null
     */
    public function getFailedData(): FailedUniformSuiteDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataListType|null  $failedData
     */
    public function withFailedData(FailedUniformSuiteDataListType|null $failedData): CreateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataListType|null
     */
    public function getResponseData(): CreatedUniformSuiteDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataListType|null  $responseData
     */
    public function withResponseData(CreatedUniformSuiteDataListType|null $responseData): CreateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
