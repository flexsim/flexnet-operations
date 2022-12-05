<?php

namespace Flexnet\EntitlementOrderService\Type;

class StateChangeResponseType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureStateChangeListType|null
     */
    private $featureList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeListType|null
     */
    private $featureBundleList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductStateChangeListType|null
     */
    private $productList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeListType|null
     */
    private $licenseModelList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType|null
     */
    private $simpleEntitlementList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType|null
     */
    private $bulkEntitlementList;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureStateChangeListType|null  $featureList
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeListType|null  $featureBundleList
     * @param  \Flexnet\EntitlementOrderService\Type\ProductStateChangeListType|null  $productList
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeListType|null  $licenseModelList
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType|null  $simpleEntitlementList
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType|null  $bulkEntitlementList
     */
    public function __construct(FeatureStateChangeListType|null $featureList = null, FeatureBundleStateChangeListType|null $featureBundleList = null, ProductStateChangeListType|null $productList = null, LicenseModelStateChangeListType|null $licenseModelList = null, EntitlementStateChangeListType|null $simpleEntitlementList = null, EntitlementStateChangeListType|null $bulkEntitlementList = null)
    {
        $this->featureList = $featureList;
        $this->featureBundleList = $featureBundleList;
        $this->productList = $productList;
        $this->licenseModelList = $licenseModelList;
        $this->simpleEntitlementList = $simpleEntitlementList;
        $this->bulkEntitlementList = $bulkEntitlementList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureStateChangeListType|null  $featureList
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeListType|null  $featureBundleList
     * @param  \Flexnet\EntitlementOrderService\Type\ProductStateChangeListType|null  $productList
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeListType|null  $licenseModelList
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType|null  $simpleEntitlementList
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType|null  $bulkEntitlementList
     */
    public static function create(FeatureStateChangeListType|null $featureList = null, FeatureBundleStateChangeListType|null $featureBundleList = null, ProductStateChangeListType|null $productList = null, LicenseModelStateChangeListType|null $licenseModelList = null, EntitlementStateChangeListType|null $simpleEntitlementList = null, EntitlementStateChangeListType|null $bulkEntitlementList = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureList(): FeatureStateChangeListType|null
    {
        return $this->featureList;
    }

    public function withFeatureList(FeatureStateChangeListType|null $featureList): StateChangeResponseType
    {
        $new = clone $this;
        $new->featureList = $featureList;

        return $new;
    }

    public function getFeatureBundleList(): FeatureBundleStateChangeListType|null
    {
        return $this->featureBundleList;
    }

    public function withFeatureBundleList(FeatureBundleStateChangeListType|null $featureBundleList): StateChangeResponseType
    {
        $new = clone $this;
        $new->featureBundleList = $featureBundleList;

        return $new;
    }

    public function getProductList(): ProductStateChangeListType|null
    {
        return $this->productList;
    }

    public function withProductList(ProductStateChangeListType|null $productList): StateChangeResponseType
    {
        $new = clone $this;
        $new->productList = $productList;

        return $new;
    }

    public function getLicenseModelList(): LicenseModelStateChangeListType|null
    {
        return $this->licenseModelList;
    }

    public function withLicenseModelList(LicenseModelStateChangeListType|null $licenseModelList): StateChangeResponseType
    {
        $new = clone $this;
        $new->licenseModelList = $licenseModelList;

        return $new;
    }

    public function getSimpleEntitlementList(): EntitlementStateChangeListType|null
    {
        return $this->simpleEntitlementList;
    }

    public function withSimpleEntitlementList(EntitlementStateChangeListType|null $simpleEntitlementList): StateChangeResponseType
    {
        $new = clone $this;
        $new->simpleEntitlementList = $simpleEntitlementList;

        return $new;
    }

    public function getBulkEntitlementList(): EntitlementStateChangeListType|null
    {
        return $this->bulkEntitlementList;
    }

    public function withBulkEntitlementList(EntitlementStateChangeListType|null $bulkEntitlementList): StateChangeResponseType
    {
        $new = clone $this;
        $new->bulkEntitlementList = $bulkEntitlementList;

        return $new;
    }
}
