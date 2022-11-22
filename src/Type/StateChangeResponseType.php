<?php

namespace Flexsim\FlexnetOperations\Type;

class StateChangeResponseType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureStateChangeListType
     */
    protected $featureList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleStateChangeListType
     */
    protected $featureBundleList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductStateChangeListType
     */
    protected $productList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelStateChangeListType
     */
    protected $licenseModelList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateChangeListType
     */
    protected $simpleEntitlementList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementStateChangeListType
     */
    protected $bulkEntitlementList;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FeatureStateChangeListType  $featureList
     * @param  \Flexsim\FlexnetOperations\Type\FeatureBundleStateChangeListType  $featureBundleList
     * @param  \Flexsim\FlexnetOperations\Type\ProductStateChangeListType  $productList
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelStateChangeListType  $licenseModelList
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementStateChangeListType  $simpleEntitlementList
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementStateChangeListType  $bulkEntitlementList
     */
    public function __construct(FeatureStateChangeListType $featureList = null, FeatureBundleStateChangeListType $featureBundleList = null, ProductStateChangeListType $productList = null, LicenseModelStateChangeListType $licenseModelList = null, EntitlementStateChangeListType $simpleEntitlementList = null, EntitlementStateChangeListType $bulkEntitlementList = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\FeatureStateChangeListType  $featureList
     * @param  \Flexsim\FlexnetOperations\Type\FeatureBundleStateChangeListType  $featureBundleList
     * @param  \Flexsim\FlexnetOperations\Type\ProductStateChangeListType  $productList
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelStateChangeListType  $licenseModelList
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementStateChangeListType  $simpleEntitlementList
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementStateChangeListType  $bulkEntitlementList
     */
    public static function create(FeatureStateChangeListType $featureList = null, FeatureBundleStateChangeListType $featureBundleList = null, ProductStateChangeListType $productList = null, LicenseModelStateChangeListType $licenseModelList = null, EntitlementStateChangeListType $simpleEntitlementList = null, EntitlementStateChangeListType $bulkEntitlementList = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureStateChangeListType
     */
    public function getFeatureList()
    {
        return $this->featureList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FeatureStateChangeListType  $featureList
     * @return $this
     */
    public function setFeatureList($featureList)
    {
        $this->featureList = $featureList;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleStateChangeListType
     */
    public function getFeatureBundleList()
    {
        return $this->featureBundleList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FeatureBundleStateChangeListType  $featureBundleList
     * @return $this
     */
    public function setFeatureBundleList($featureBundleList)
    {
        $this->featureBundleList = $featureBundleList;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductStateChangeListType
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\ProductStateChangeListType  $productList
     * @return $this
     */
    public function setProductList($productList)
    {
        $this->productList = $productList;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelStateChangeListType
     */
    public function getLicenseModelList()
    {
        return $this->licenseModelList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelStateChangeListType  $licenseModelList
     * @return $this
     */
    public function setLicenseModelList($licenseModelList)
    {
        $this->licenseModelList = $licenseModelList;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementStateChangeListType
     */
    public function getSimpleEntitlementList()
    {
        return $this->simpleEntitlementList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementStateChangeListType  $simpleEntitlementList
     * @return $this
     */
    public function setSimpleEntitlementList($simpleEntitlementList)
    {
        $this->simpleEntitlementList = $simpleEntitlementList;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementStateChangeListType
     */
    public function getBulkEntitlementList()
    {
        return $this->bulkEntitlementList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementStateChangeListType  $bulkEntitlementList
     * @return $this
     */
    public function setBulkEntitlementList($bulkEntitlementList)
    {
        $this->bulkEntitlementList = $bulkEntitlementList;

        return $this;
    }
}
