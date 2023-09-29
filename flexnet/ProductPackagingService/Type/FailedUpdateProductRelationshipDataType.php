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
    public function __construct(UpdateProductRelationshipDataType $relationship, string $reason)
    {
        $this->relationship = $relationship;
        $this->reason = $reason;
    }

    public static function create(UpdateProductRelationshipDataType $relationship, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getRelationship(): UpdateProductRelationshipDataType
    {
        return $this->relationship;
    }

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
