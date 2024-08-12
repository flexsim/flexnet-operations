<?php

namespace Flexnet\ProductPackagingService\Type;

class ProdCustomAttributesQueryListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType>|null  $attribute
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType>|null  $attribute
     */
    public static function create(\Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType>|null
     */
    public function getAttribute(): \Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType>|null  $attribute
     */
    public function withAttribute(\Flexnet\ProductPackagingService\Type\ProdCustomAttributeQueryType|array|null $attribute): \Flexnet\ProductPackagingService\Type\ProdCustomAttributesQueryListType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
