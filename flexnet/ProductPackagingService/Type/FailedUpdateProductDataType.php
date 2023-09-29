<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateProductDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateProductDataType
     */
    private $product;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(UpdateProductDataType $product, string $reason = null)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    public static function create(UpdateProductDataType $product, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getProduct(): UpdateProductDataType
    {
        return $this->product;
    }

    public function withProduct(UpdateProductDataType $product): FailedUpdateProductDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedUpdateProductDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
