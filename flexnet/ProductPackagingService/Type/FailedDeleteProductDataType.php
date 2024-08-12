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
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productIdentifier, ?string $reason = null)
    {
        $this->productIdentifier = $productIdentifier;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productIdentifier, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getProductIdentifier(): \Flexnet\ProductPackagingService\Type\ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    public function withProductIdentifier(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productIdentifier): \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
