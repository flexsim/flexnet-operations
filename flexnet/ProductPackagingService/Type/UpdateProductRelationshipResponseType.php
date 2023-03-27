<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class UpdateProductRelationshipResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedUpdateProductRelationshipDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedUpdateProductRelationshipDataListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): UpdateProductRelationshipResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataListType|null
     */
    public function getFailedData(): FailedUpdateProductRelationshipDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataListType|null  $failedData
     */
    public function withFailedData(FailedUpdateProductRelationshipDataListType|null $failedData): UpdateProductRelationshipResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
