<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedProductDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateProductDataType|null
     */
    private $product;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductDataType|null  $product
     * @param  string|null  $reason
     */
    public function __construct(CreateProductDataType|null $product = null, string|null $reason = null)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductDataType|null  $product
     * @param  string|null  $reason
     */
    public static function create(CreateProductDataType|null $product = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateProductDataType|null
     */
    public function getProduct(): CreateProductDataType|null
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductDataType|null  $product
     */
    public function withProduct(CreateProductDataType|null $product): FailedProductDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedProductDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
