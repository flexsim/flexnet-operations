<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class CreateProductResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedProductDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedProductDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedProductDataListType|null $failedData = null, CreatedProductDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedProductDataListType|null $failedData = null, CreatedProductDataListType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): CreateProductResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedProductDataListType|null
     */
    public function getFailedData(): FailedProductDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductDataListType|null  $failedData
     */
    public function withFailedData(FailedProductDataListType|null $failedData): CreateProductResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedProductDataListType|null
     */
    public function getResponseData(): CreatedProductDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductDataListType|null  $responseData
     */
    public function withResponseData(CreatedProductDataListType|null $responseData): CreateProductResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
