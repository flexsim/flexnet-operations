<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateProductRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateProductDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductDataType>
     */
    private $product;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductDataType>  $product
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CreateProductDataType|array $product)
    {
        $this->product = $product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductDataType>  $product
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CreateProductDataType|array $product)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateProductDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductDataType>
     */
    public function getProduct(): \Flexnet\ProductPackagingService\Type\CreateProductDataType|array
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductDataType>  $product
     */
    public function withProduct(\Flexnet\ProductPackagingService\Type\CreateProductDataType|array $product): \Flexnet\ProductPackagingService\Type\CreateProductRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}
