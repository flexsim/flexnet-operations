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
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType $relationship, string $reason)
    {
        $this->relationship = $relationship;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType $relationship, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getRelationship(): \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType
    {
        return $this->relationship;
    }

    public function withRelationship(\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType $relationship): \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->relationship = $relationship;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\ProductPackagingService\Type\FailedUpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
