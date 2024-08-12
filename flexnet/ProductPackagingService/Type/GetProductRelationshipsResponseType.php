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
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>|null  $relationship
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array|null $relationship = null)
    {
        $this->statusInfo = $statusInfo;
        $this->relationship = $relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>|null  $relationship
     */
    public static function create(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array|null $relationship = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\ProductPackagingService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo): \Flexnet\ProductPackagingService\Type\GetProductRelationshipsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>|null
     */
    public function getRelationship(): \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array|null
    {
        return $this->relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>|null  $relationship
     */
    public function withRelationship(\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array|null $relationship): \Flexnet\ProductPackagingService\Type\GetProductRelationshipsResponseType
    {
        $new = clone $this;
        $new->relationship = $relationship;

        return $new;
    }
}
