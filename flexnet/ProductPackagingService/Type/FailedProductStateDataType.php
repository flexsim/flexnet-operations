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
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductStateDataType $product, string $reason)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\ProductStateDataType $product, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getProduct(): \Flexnet\ProductPackagingService\Type\ProductStateDataType
    {
        return $this->product;
    }

    public function withProduct(\Flexnet\ProductPackagingService\Type\ProductStateDataType $product): \Flexnet\ProductPackagingService\Type\FailedProductStateDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\ProductPackagingService\Type\FailedProductStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
