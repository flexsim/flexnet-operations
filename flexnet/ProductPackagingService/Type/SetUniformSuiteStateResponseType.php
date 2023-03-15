<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetUniformSuiteStateResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedUniformSuiteStateDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedUniformSuiteStateDataListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): SetUniformSuiteStateResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataListType|null
     */
    public function getFailedData(): FailedUniformSuiteStateDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataListType|null  $failedData
     */
    public function withFailedData(FailedUniformSuiteStateDataListType|null $failedData): SetUniformSuiteStateResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
