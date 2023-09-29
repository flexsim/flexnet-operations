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
     */
    public function __construct(ProductRelationshipDataType $relationship = null, string $reason = null)
    {
        $this->relationship = $relationship;
        $this->reason = $reason;
    }

    public static function create(ProductRelationshipDataType $relationship = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getRelationship(): ?ProductRelationshipDataType
    {
        return $this->relationship;
    }

    public function withRelationship(?ProductRelationshipDataType $relationship): FailedProductRelationshipDataType
    {
        $new = clone $this;
        $new->relationship = $relationship;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedProductRelationshipDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
