<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class HandleProductCategoryToAcctRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\AccountIdentifierType
     */
    private $acct;

    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>
     */
    private $productCategory;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>  $productCategory
     */
    public function __construct(AccountIdentifierType $acct, ProductCategoryDataType|array $productCategory)
    {
        $this->acct = $acct;
        $this->productCategory = $productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>  $productCategory
     */
    public static function create(AccountIdentifierType $acct, ProductCategoryDataType|array $productCategory)
    {
        return new static(...\func_get_args());
    }

    public function getAcct(): AccountIdentifierType
    {
        return $this->acct;
    }

    public function withAcct(AccountIdentifierType $acct): HandleProductCategoryToAcctRequestType
    {
        $new = clone $this;
        $new->acct = $acct;

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
    public function withProductCategory(ProductCategoryDataType|array $productCategory): HandleProductCategoryToAcctRequestType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
