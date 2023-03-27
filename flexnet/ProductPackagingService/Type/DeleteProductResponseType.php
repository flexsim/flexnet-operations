<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class DeleteProductResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedDeleteProductDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedDeleteProductDataListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): DeleteProductResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataListType|null
     */
    public function getFailedData(): FailedDeleteProductDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataListType|null  $failedData
     */
    public function withFailedData(FailedDeleteProductDataListType|null $failedData): DeleteProductResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
