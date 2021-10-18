<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class HandleProductCategoriesToUserRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    protected $user;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType
     */
    protected $productCategory;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory)
    {
        $this->user = $user;
        $this->productCategory = $productCategory;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
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
