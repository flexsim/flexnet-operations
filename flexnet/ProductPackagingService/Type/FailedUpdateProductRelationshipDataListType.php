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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array|null $failedRelationship = null)
    {
        $this->failedRelationship = $failedRelationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType>|null  $failedRelationship
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array|null $failedRelationship = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType>|null
     */
    public function getFailedRelationship(): \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array|null
    {
        return $this->failedRelationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType>|null  $failedRelationship
     */
    public function withFailedRelationship(\Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType|array|null $failedRelationship): \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataListType
    {
        $new = clone $this;
        $new->failedRelationship = $failedRelationship;

        return $new;
    }
}
