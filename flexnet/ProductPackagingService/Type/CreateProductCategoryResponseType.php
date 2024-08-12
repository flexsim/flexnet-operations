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
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataListType $failedData = null, ?\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataListType $failedData = null, ?\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\ProductPackagingService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo): \Flexnet\ProductPackagingService\Type\CreateProductCategoryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataListType $failedData): \Flexnet\ProductPackagingService\Type\CreateProductCategoryResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataListType $responseData): \Flexnet\ProductPackagingService\Type\CreateProductCategoryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
