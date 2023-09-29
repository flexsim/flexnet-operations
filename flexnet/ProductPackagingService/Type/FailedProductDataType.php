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
     */
    public function __construct(CreateProductDataType $product = null, string $reason = null)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    public static function create(CreateProductDataType $product = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getProduct(): ?CreateProductDataType
    {
        return $this->product;
    }

    public function withProduct(?CreateProductDataType $product): FailedProductDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedProductDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
