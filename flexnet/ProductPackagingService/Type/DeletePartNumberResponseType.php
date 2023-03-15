<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeletePartNumberResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedDeletePartNumberDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedDeletePartNumberDataListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): DeletePartNumberResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataListType|null
     */
    public function getFailedData(): FailedDeletePartNumberDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataListType|null  $failedData
     */
    public function withFailedData(FailedDeletePartNumberDataListType|null $failedData): DeletePartNumberResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}