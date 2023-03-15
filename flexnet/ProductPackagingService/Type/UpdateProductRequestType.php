<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateProductRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductDataType>
     */
    private $product;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductDataType>  $product
     */
    public function __construct(UpdateProductDataType|array $product)
    {
        $this->product = $product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductDataType>  $product
     */
    public static function create(UpdateProductDataType|array $product)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductDataType>
     */
    public function getProduct(): UpdateProductDataType|array
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductDataType>  $product
     */
    public function withProduct(UpdateProductDataType|array $product): UpdateProductRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}
