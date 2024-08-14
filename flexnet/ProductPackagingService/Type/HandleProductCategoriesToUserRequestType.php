<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class HandleProductCategoriesToUserRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UserIdentifierType
     */
    private $user;

    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>
     */
    private $productCategory;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>  $productCategory
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\UserIdentifierType $user, \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array $productCategory)
    {
        $this->user = $user;
        $this->productCategory = $productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>  $productCategory
     */
    public static function create(\Flexnet\ProductPackagingService\Type\UserIdentifierType $user, \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array $productCategory)
    {
        return new static(...\func_get_args());
    }

    public function getUser(): \Flexnet\ProductPackagingService\Type\UserIdentifierType
    {
        return $this->user;
    }

    public function withUser(\Flexnet\ProductPackagingService\Type\UserIdentifierType $user): \Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserRequestType
    {
        $new = clone $this;
        $new->user = $user;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>
     */
    public function getProductCategory(): \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array
    {
        return $this->productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>  $productCategory
     */
    public function withProductCategory(\Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array $productCategory): \Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserRequestType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
