<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class HandleProductCategoryToAcctRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    protected $acct;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType
     */
    protected $productCategory;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType $acct
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AccountIdentifierType $acct, \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory)
    {
        $this->acct = $acct;
        $this->productCategory = $productCategory;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType $acct
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AccountIdentifierType $acct, \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getAcct()
    {
        return $this->acct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType $acct
     * @return $this
     */
    public function setAcct($acct)
    {
        $this->acct = $acct;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductCategoryDataType
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
        return $this;
    }
}
