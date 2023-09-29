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

    public static function create(FeatureStateChangeListType $featureList = null, FeatureBundleStateChangeListType $featureBundleList = null, ProductStateChangeListType $productList = null, LicenseModelStateChangeListType $licenseModelList = null, EntitlementStateChangeListType $simpleEntitlementList = null, EntitlementStateChangeListType $bulkEntitlementList = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureList(): ?FeatureStateChangeListType
    {
        return $this->featureList;
    }

    public function withFeatureList(?FeatureStateChangeListType $featureList): StateChangeResponseType
    {
        $new = clone $this;
        $new->featureList = $featureList;

        return $new;
    }

    public function getFeatureBundleList(): ?FeatureBundleStateChangeListType
    {
        return $this->featureBundleList;
    }

    public function withFeatureBundleList(?FeatureBundleStateChangeListType $featureBundleList): StateChangeResponseType
    {
        $new = clone $this;
        $new->featureBundleList = $featureBundleList;

        return $new;
    }

    public function getProductList(): ?ProductStateChangeListType
    {
        return $this->productList;
    }

    public function withProductList(?ProductStateChangeListType $productList): StateChangeResponseType
    {
        $new = clone $this;
        $new->productList = $productList;

        return $new;
    }

    public function getLicenseModelList(): ?LicenseModelStateChangeListType
    {
        return $this->licenseModelList;
    }

    public function withLicenseModelList(?LicenseModelStateChangeListType $licenseModelList): StateChangeResponseType
    {
        $new = clone $this;
        $new->licenseModelList = $licenseModelList;

        return $new;
    }

    public function getSimpleEntitlementList(): ?EntitlementStateChangeListType
    {
        return $this->simpleEntitlementList;
    }

    public function withSimpleEntitlementList(?EntitlementStateChangeListType $simpleEntitlementList): StateChangeResponseType
    {
        $new = clone $this;
        $new->simpleEntitlementList = $simpleEntitlementList;

        return $new;
    }

    public function getBulkEntitlementList(): ?EntitlementStateChangeListType
    {
        return $this->bulkEntitlementList;
    }

    public function withBulkEntitlementList(?EntitlementStateChangeListType $bulkEntitlementList): StateChangeResponseType
    {
        $new = clone $this;
        $new->bulkEntitlementList = $bulkEntitlementList;

        return $new;
    }
}
