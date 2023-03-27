<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class CreateProductCategoryResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedProductCategoryDataListType|null $failedData = null, CreatedProductCategoryDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedProductCategoryDataListType|null $failedData = null, CreatedProductCategoryDataListType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): CreateProductCategoryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataListType|null
     */
    public function getFailedData(): FailedProductCategoryDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataListType|null  $failedData
     */
    public function withFailedData(FailedProductCategoryDataListType|null $failedData): CreateProductCategoryResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataListType|null
     */
    public function getResponseData(): CreatedProductCategoryDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataListType|null  $responseData
     */
    public function withResponseData(CreatedProductCategoryDataListType|null $responseData): CreateProductCategoryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
