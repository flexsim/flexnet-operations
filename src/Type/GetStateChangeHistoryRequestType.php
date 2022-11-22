<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStateChangeHistoryRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureListType
     */
    protected $featureList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleListType
     */
    protected $featureBundleList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductListType
     */
    protected $productList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelListType
     */
    protected $licenseModelList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementListType
     */
    protected $simpleEntitlementList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementListType
     */
    protected $bulkEntitlementList;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FeatureListType  $featureList
     * @param  \Flexsim\FlexnetOperations\Type\FeatureBundleListType  $featureBundleList
     * @param  \Flexsim\FlexnetOperations\Type\ProductListType  $productList
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelListType  $licenseModelList
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementListType  $simpleEntitlementList
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementListType  $bulkEntitlementList
     */
    public function __construct(FeatureListType $featureList = null, FeatureBundleListType $featureBundleList = null, ProductListType $productList = null, LicenseModelListType $licenseModelList = null, EntitlementListType $simpleEntitlementList = null, EntitlementListType $bulkEntitlementList = null)
    {
        $this->featureList = $featureList;
        $this->featureBundleList = $featureBundleList;
        $this->productList = $productList;
        $this->licenseModelList = $licenseModelList;
        $this->simpleEntitlementList = $simpleEntitlementList;
        $this->bulkEntitlementList = $bulkEntitlementList;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FeatureListType  $featureList
     * @param  \Flexsim\FlexnetOperations\Type\FeatureBundleListType  $featureBundleList
     * @param  \Flexsim\FlexnetOperations\Type\ProductListType  $productList
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelListType  $licenseModelList
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementListType  $simpleEntitlementList
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementListType  $bulkEntitlementList
     */
    public static function create(FeatureListType $featureList = null, FeatureBundleListType $featureBundleList = null, ProductListType $productList = null, LicenseModelListType $licenseModelList = null, EntitlementListType $simpleEntitlementList = null, EntitlementListType $bulkEntitlementList = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureListType
     */
    public function getFeatureList()
    {
        return $this->featureList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FeatureListType  $featureList
     * @return $this
     */
    public function setFeatureList($featureList)
    {
        $this->featureList = $featureList;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleListType
     */
    public function getFeatureBundleList()
    {
        return $this->featureBundleList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FeatureBundleListType  $featureBundleList
     * @return $this
     */
    public function setFeatureBundleList($featureBundleList)
    {
        $this->featureBundleList = $featureBundleList;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductListType
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\ProductListType  $productList
     * @return $this
     */
    public function setProductList($productList)
    {
        $this->productList = $productList;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelListType
     */
    public function getLicenseModelList()
    {
        return $this->licenseModelList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelListType  $licenseModelList
     * @return $this
     */
    public function setLicenseModelList($licenseModelList)
    {
        $this->licenseModelList = $licenseModelList;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementListType
     */
    public function getSimpleEntitlementList()
    {
        return $this->simpleEntitlementList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementListType  $simpleEntitlementList
     * @return $this
     */
    public function setSimpleEntitlementList($simpleEntitlementList)
    {
        $this->simpleEntitlementList = $simpleEntitlementList;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementListType
     */
    public function getBulkEntitlementList()
    {
        return $this->bulkEntitlementList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementListType  $bulkEntitlementList
     * @return $this
     */
    public function setBulkEntitlementList($bulkEntitlementList)
    {
        $this->bulkEntitlementList = $bulkEntitlementList;

        return $this;
    }
}
