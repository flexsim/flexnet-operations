<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetProductStateRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductStateDataType|array<\Flexnet\ProductPackagingService\Type\ProductStateDataType>
     */
    private $product;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductStateDataType|array<\Flexnet\ProductPackagingService\Type\ProductStateDataType>  $product
     */
    public function __construct(ProductStateDataType|array $product)
    {
        $this->product = $product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductStateDataType|array<\Flexnet\ProductPackagingService\Type\ProductStateDataType>  $product
     */
    public static function create(ProductStateDataType|array $product)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductStateDataType|array<\Flexnet\ProductPackagingService\Type\ProductStateDataType>
     */
    public function getProduct(): ProductStateDataType|array
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductStateDataType|array<\Flexnet\ProductPackagingService\Type\ProductStateDataType>  $product
     */
    public function withProduct(ProductStateDataType|array $product): SetProductStateRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}
