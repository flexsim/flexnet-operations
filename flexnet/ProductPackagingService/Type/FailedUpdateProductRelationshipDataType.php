<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateProductRelationshipDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType
     */
    private $relationship;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType  $relationship
     */
    public function __construct(UpdateProductRelationshipDataType $relationship, string $reason)
    {
        $this->relationship = $relationship;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType  $relationship
     */
    public static function create(UpdateProductRelationshipDataType $relationship, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType
     */
    public function getRelationship(): UpdateProductRelationshipDataType
    {
        return $this->relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType  $relationship
     */
    public function withRelationship(UpdateProductRelationshipDataType $relationship): FailedUpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->relationship = $relationship;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedUpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
