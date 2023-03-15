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
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductDataType  $product
     * @param  string|null  $reason
     */
    public function __construct(UpdateProductDataType $product, string|null $reason = null)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductDataType  $product
     * @param  string|null  $reason
     */
    public static function create(UpdateProductDataType $product, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateProductDataType
     */
    public function getProduct(): UpdateProductDataType
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductDataType  $product
     */
    public function withProduct(UpdateProductDataType $product): FailedUpdateProductDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedUpdateProductDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
