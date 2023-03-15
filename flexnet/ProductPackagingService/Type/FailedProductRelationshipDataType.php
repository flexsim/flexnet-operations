<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedProductRelationshipDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|null
     */
    private $relationship;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|null  $relationship
     * @param  string|null  $reason
     */
    public function __construct(ProductRelationshipDataType|null $relationship = null, string|null $reason = null)
    {
        $this->relationship = $relationship;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|null  $relationship
     * @param  string|null  $reason
     */
    public static function create(ProductRelationshipDataType|null $relationship = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|null
     */
    public function getRelationship(): ProductRelationshipDataType|null
    {
        return $this->relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|null  $relationship
     */
    public function withRelationship(ProductRelationshipDataType|null $relationship): FailedProductRelationshipDataType
    {
        $new = clone $this;
        $new->relationship = $relationship;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedProductRelationshipDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
