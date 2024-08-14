<?php

namespace Flexnet\ProductPackagingService\Type;

class GetProductsQueryResponseDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductQueryDataType|array<\Flexnet\ProductPackagingService\Type\ProductQueryDataType>|null
     */
    private $product;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductQueryDataType|array<\Flexnet\ProductPackagingService\Type\ProductQueryDataType>|null  $product
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductQueryDataType|array|null $product = null)
    {
        $this->product = $product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductQueryDataType|array<\Flexnet\ProductPackagingService\Type\ProductQueryDataType>|null  $product
     */
    public static function create(\Flexnet\ProductPackagingService\Type\ProductQueryDataType|array|null $product = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductQueryDataType|array<\Flexnet\ProductPackagingService\Type\ProductQueryDataType>|null
     */
    public function getProduct(): \Flexnet\ProductPackagingService\Type\ProductQueryDataType|array|null
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductQueryDataType|array<\Flexnet\ProductPackagingService\Type\ProductQueryDataType>|null  $product
     */
    public function withProduct(\Flexnet\ProductPackagingService\Type\ProductQueryDataType|array|null $product): \Flexnet\ProductPackagingService\Type\GetProductsQueryResponseDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}
