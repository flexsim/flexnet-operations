<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStateChangeHistoryRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureListType|null
     */
    private $featureList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureBundleListType|null
     */
    private $featureBundleList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductListType|null
     */
    private $productList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelListType|null
     */
    private $licenseModelList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementListType|null
     */
    private $simpleEntitlementList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementListType|null
     */
    private $bulkEntitlementList;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureListType|null  $featureList
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleListType|null  $featureBundleList
     * @param  \Flexnet\EntitlementOrderService\Type\ProductListType|null  $productList
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelListType|null  $licenseModelList
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementListType|null  $simpleEntitlementList
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementListType|null  $bulkEntitlementList
     */
    public function __construct(FeatureListType|null $featureList = null, FeatureBundleListType|null $featureBundleList = null, ProductListType|null $productList = null, LicenseModelListType|null $licenseModelList = null, EntitlementListType|null $simpleEntitlementList = null, EntitlementListType|null $bulkEntitlementList = null)
    {
        $this->featureList = $featureList;
        $this->featureBundleList = $featureBundleList;
        $this->productList = $productList;
        $this->licenseModelList = $licenseModelList;
        $this->simpleEntitlementList = $simpleEntitlementList;
        $this->bulkEntitlementList = $bulkEntitlementList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureListType|null  $featureList
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleListType|null  $featureBundleList
     * @param  \Flexnet\EntitlementOrderService\Type\ProductListType|null  $productList
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelListType|null  $licenseModelList
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementListType|null  $simpleEntitlementList
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementListType|null  $bulkEntitlementList
     */
    public static function create(FeatureListType|null $featureList = null, FeatureBundleListType|null $featureBundleList = null, ProductListType|null $productList = null, LicenseModelListType|null $licenseModelList = null, EntitlementListType|null $simpleEntitlementList = null, EntitlementListType|null $bulkEntitlementList = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FeatureListType|null
     */
    public function getFeatureList(): FeatureListType|null
    {
        return $this->featureList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureListType|null  $featureList
     * @return GetStateChangeHistoryRequestType
     */
    public function withFeatureList(FeatureListType|null $featureList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->featureList = $featureList;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FeatureBundleListType|null
     */
    public function getFeatureBundleList(): FeatureBundleListType|null
    {
        return $this->featureBundleList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleListType|null  $featureBundleList
     * @return GetStateChangeHistoryRequestType
     */
    public function withFeatureBundleList(FeatureBundleListType|null $featureBundleList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->featureBundleList = $featureBundleList;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ProductListType|null
     */
    public function getProductList(): ProductListType|null
    {
        return $this->productList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductListType|null  $productList
     * @return GetStateChangeHistoryRequestType
     */
    public function withProductList(ProductListType|null $productList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->productList = $productList;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseModelListType|null
     */
    public function getLicenseModelList(): LicenseModelListType|null
    {
        return $this->licenseModelList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelListType|null  $licenseModelList
     * @return GetStateChangeHistoryRequestType
     */
    public function withLicenseModelList(LicenseModelListType|null $licenseModelList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->licenseModelList = $licenseModelList;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementListType|null
     */
    public function getSimpleEntitlementList(): EntitlementListType|null
    {
        return $this->simpleEntitlementList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementListType|null  $simpleEntitlementList
     * @return GetStateChangeHistoryRequestType
     */
    public function withSimpleEntitlementList(EntitlementListType|null $simpleEntitlementList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->simpleEntitlementList = $simpleEntitlementList;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementListType|null
     */
    public function getBulkEntitlementList(): EntitlementListType|null
    {
        return $this->bulkEntitlementList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementListType|null  $bulkEntitlementList
     * @return GetStateChangeHistoryRequestType
     */
    public function withBulkEntitlementList(EntitlementListType|null $bulkEntitlementList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementList = $bulkEntitlementList;

        return $new;
    }
}
