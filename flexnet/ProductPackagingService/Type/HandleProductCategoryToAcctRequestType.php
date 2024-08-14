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
    public function __construct(\Flexnet\ProductPackagingService\Type\AccountIdentifierType $acct, \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array $productCategory)
    {
        $this->acct = $acct;
        $this->productCategory = $productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>  $productCategory
     */
    public static function create(\Flexnet\ProductPackagingService\Type\AccountIdentifierType $acct, \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array $productCategory)
    {
        return new static(...\func_get_args());
    }

    public function getAcct(): \Flexnet\ProductPackagingService\Type\AccountIdentifierType
    {
        return $this->acct;
    }

    public function withAcct(\Flexnet\ProductPackagingService\Type\AccountIdentifierType $acct): \Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctRequestType
    {
        $new = clone $this;
        $new->acct = $acct;

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
    public function withProductCategory(\Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array $productCategory): \Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctRequestType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
