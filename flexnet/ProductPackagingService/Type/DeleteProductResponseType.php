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
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\FailedDeleteProductDataListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\FailedDeleteProductDataListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\ProductPackagingService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo): \Flexnet\ProductPackagingService\Type\DeleteProductResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\ProductPackagingService\Type\FailedDeleteProductDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\ProductPackagingService\Type\FailedDeleteProductDataListType $failedData): \Flexnet\ProductPackagingService\Type\DeleteProductResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
