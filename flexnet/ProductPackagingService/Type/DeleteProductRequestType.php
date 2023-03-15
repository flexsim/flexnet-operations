<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteProductRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\DeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\DeleteProductDataType>
     */
    private $product;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\DeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\DeleteProductDataType>  $product
     */
    public function __construct(DeleteProductDataType|array $product)
    {
        $this->product = $product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\DeleteProductDataType>  $product
     */
    public static function create(DeleteProductDataType|array $product)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\DeleteProductDataType>
     */
    public function getProduct(): DeleteProductDataType|array
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\DeleteProductDataType>  $product
     */
    public function withProduct(DeleteProductDataType|array $product): DeleteProductRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}
