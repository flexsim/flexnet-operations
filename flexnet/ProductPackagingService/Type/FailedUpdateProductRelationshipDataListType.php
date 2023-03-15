<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateProductRelationshipDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType>|null
     */
    private $failedRelationship;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType>|null  $failedRelationship
     */
    public function __construct(FailedUpdateProductRelationshipDataType|array|null $failedRelationship = null)
    {
        $this->failedRelationship = $failedRelationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType>|null  $failedRelationship
     */
    public static function create(FailedUpdateProductRelationshipDataType|array|null $failedRelationship = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType>|null
     */
    public function getFailedRelationship(): FailedUpdateProductRelationshipDataType|array|null
    {
        return $this->failedRelationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType>|null  $failedRelationship
     */
    public function withFailedRelationship(FailedUpdateProductRelationshipDataType|array|null $failedRelationship): FailedUpdateProductRelationshipDataListType
    {
        $new = clone $this;
        $new->failedRelationship = $failedRelationship;

        return $new;
    }
}
