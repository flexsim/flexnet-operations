<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedProductStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductStateDataType
     */
    private $product;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(ProductStateDataType $product, string $reason)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    public static function create(ProductStateDataType $product, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getProduct(): ProductStateDataType
    {
        return $this->product;
    }

    public function withProduct(ProductStateDataType $product): FailedProductStateDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedProductStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
