<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class UpdateUniformSuiteResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedUpdateUniformSuiteDataListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, FailedUpdateUniformSuiteDataListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): UpdateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedUpdateUniformSuiteDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedUpdateUniformSuiteDataListType $failedData): UpdateUniformSuiteResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
