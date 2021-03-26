<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class HandleProductCategoryToOrgRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $org;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType
     */
    private $productCategory;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $org
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $org, \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory)
    {
        $this->org = $org;
        $this->productCategory = $productCategory;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $org
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $org, \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory)
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
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $org
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
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
        return $this;
    }


}

