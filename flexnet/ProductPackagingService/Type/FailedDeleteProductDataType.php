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
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     * @param  string|null  $reason
     */
    public function __construct(ProductIdentifierType $productIdentifier, string|null $reason = null)
    {
        $this->productIdentifier = $productIdentifier;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     * @param  string|null  $reason
     */
    public static function create(ProductIdentifierType $productIdentifier, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     */
    public function withProductIdentifier(ProductIdentifierType $productIdentifier): FailedDeleteProductDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedDeleteProductDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
