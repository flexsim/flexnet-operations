<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedProductRelationshipDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType>|null
     */
    private $failedRelationship;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType>|null  $failedRelationship
     */
    public function __construct(FailedProductRelationshipDataType|array|null $failedRelationship = null)
    {
        $this->failedRelationship = $failedRelationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType>|null  $failedRelationship
     */
    public static function create(FailedProductRelationshipDataType|array|null $failedRelationship = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType>|null
     */
    public function getFailedRelationship(): FailedProductRelationshipDataType|array|null
    {
        return $this->failedRelationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType>|null  $failedRelationship
     */
    public function withFailedRelationship(FailedProductRelationshipDataType|array|null $failedRelationship): FailedProductRelationshipDataListType
    {
        $new = clone $this;
        $new->failedRelationship = $failedRelationship;

        return $new;
    }
}
