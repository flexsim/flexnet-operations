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
    public function __construct(?\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType $relationship = null, ?string $reason = null)
    {
        $this->relationship = $relationship;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType $relationship = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getRelationship(): ?\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType
    {
        return $this->relationship;
    }

    public function withRelationship(?\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType $relationship): \Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType
    {
        $new = clone $this;
        $new->relationship = $relationship;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedProductRelationshipDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
