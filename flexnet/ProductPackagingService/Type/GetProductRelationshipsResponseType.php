<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class GetProductRelationshipsResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>|null
     */
    private $relationship;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>|null  $relationship
     */
    public function __construct(StatusInfoType $statusInfo, ProductRelationshipDataType|array|null $relationship = null)
    {
        $this->statusInfo = $statusInfo;
        $this->relationship = $relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>|null  $relationship
     */
    public static function create(StatusInfoType $statusInfo, ProductRelationshipDataType|array|null $relationship = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetProductRelationshipsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>|null
     */
    public function getRelationship(): ProductRelationshipDataType|array|null
    {
        return $this->relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>|null  $relationship
     */
    public function withRelationship(ProductRelationshipDataType|array|null $relationship): GetProductRelationshipsResponseType
    {
        $new = clone $this;
        $new->relationship = $relationship;

        return $new;
    }
}
