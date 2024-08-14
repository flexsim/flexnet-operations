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
    public function __construct(\Flexnet\ProductPackagingService\Type\DeleteProductDataType|array $product)
    {
        $this->product = $product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\DeleteProductDataType>  $product
     */
    public static function create(\Flexnet\ProductPackagingService\Type\DeleteProductDataType|array $product)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\DeleteProductDataType>
     */
    public function getProduct(): \Flexnet\ProductPackagingService\Type\DeleteProductDataType|array
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\DeleteProductDataType>  $product
     */
    public function withProduct(\Flexnet\ProductPackagingService\Type\DeleteProductDataType|array $product): \Flexnet\ProductPackagingService\Type\DeleteProductRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}
