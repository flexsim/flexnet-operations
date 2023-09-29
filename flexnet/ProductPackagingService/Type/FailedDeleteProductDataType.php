<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeleteProductDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(ProductIdentifierType $productIdentifier, string $reason = null)
    {
        $this->productIdentifier = $productIdentifier;
        $this->reason = $reason;
    }

    public static function create(ProductIdentifierType $productIdentifier, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    public function withProductIdentifier(ProductIdentifierType $productIdentifier): FailedDeleteProductDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedDeleteProductDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
