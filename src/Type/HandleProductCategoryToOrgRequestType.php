<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class HandleProductCategoryToOrgRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    protected $org;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType
     */
    protected $productCategory;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $org
     * @param  \Flexsim\FlexnetOperations\Type\ProductCategoryDataType  $productCategory
     */
    public function __construct(OrganizationIdentifierType $org, ProductCategoryDataType $productCategory)
    {
        $this->org = $org;
        $this->productCategory = $productCategory;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $org
     * @param  \Flexsim\FlexnetOperations\Type\ProductCategoryDataType  $productCategory
     */
    public static function create(OrganizationIdentifierType $org, ProductCategoryDataType $productCategory)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getOrg()
    {
        return $this->org;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $org
     * @return $this
     */
    public function setOrg($org)
    {
        $this->org = $org;

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
     * @param  \Flexsim\FlexnetOperations\Type\ProductCategoryDataType  $productCategory
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }
}
