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
     * @param  \Flexnet\ProductPackagingService\Type\UserIdentifierType  $user
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>  $productCategory
     */
    public function __construct(UserIdentifierType $user, ProductCategoryDataType|array $productCategory)
    {
        $this->user = $user;
        $this->productCategory = $productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UserIdentifierType  $user
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>  $productCategory
     */
    public static function create(UserIdentifierType $user, ProductCategoryDataType|array $productCategory)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UserIdentifierType
     */
    public function getUser(): UserIdentifierType
    {
        return $this->user;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UserIdentifierType  $user
     */
    public function withUser(UserIdentifierType $user): HandleProductCategoriesToUserRequestType
    {
        $new = clone $this;
        $new->user = $user;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>
     */
    public function getProductCategory(): ProductCategoryDataType|array
    {
        return $this->productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>  $productCategory
     */
    public function withProductCategory(ProductCategoryDataType|array $productCategory): HandleProductCategoriesToUserRequestType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
