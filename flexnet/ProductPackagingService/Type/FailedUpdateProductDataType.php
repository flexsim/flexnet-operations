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
    public function __construct(\Flexnet\ProductPackagingService\Type\UpdateProductDataType $product, ?string $reason = null)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\UpdateProductDataType $product, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getProduct(): \Flexnet\ProductPackagingService\Type\UpdateProductDataType
    {
        return $this->product;
    }

    public function withProduct(\Flexnet\ProductPackagingService\Type\UpdateProductDataType $product): \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
