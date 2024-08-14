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
    public function __construct(?\Flexnet\EntitlementOrderService\Type\FeatureStateChangeListType $featureList = null, ?\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeListType $featureBundleList = null, ?\Flexnet\EntitlementOrderService\Type\ProductStateChangeListType $productList = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeListType $licenseModelList = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType $simpleEntitlementList = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType $bulkEntitlementList = null)
    {
        $this->featureList = $featureList;
        $this->featureBundleList = $featureBundleList;
        $this->productList = $productList;
        $this->licenseModelList = $licenseModelList;
        $this->simpleEntitlementList = $simpleEntitlementList;
        $this->bulkEntitlementList = $bulkEntitlementList;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\FeatureStateChangeListType $featureList = null, ?\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeListType $featureBundleList = null, ?\Flexnet\EntitlementOrderService\Type\ProductStateChangeListType $productList = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeListType $licenseModelList = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType $simpleEntitlementList = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType $bulkEntitlementList = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureList(): ?\Flexnet\EntitlementOrderService\Type\FeatureStateChangeListType
    {
        return $this->featureList;
    }

    public function withFeatureList(?\Flexnet\EntitlementOrderService\Type\FeatureStateChangeListType $featureList): \Flexnet\EntitlementOrderService\Type\StateChangeResponseType
    {
        $new = clone $this;
        $new->featureList = $featureList;

        return $new;
    }

    public function getFeatureBundleList(): ?\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeListType
    {
        return $this->featureBundleList;
    }

    public function withFeatureBundleList(?\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeListType $featureBundleList): \Flexnet\EntitlementOrderService\Type\StateChangeResponseType
    {
        $new = clone $this;
        $new->featureBundleList = $featureBundleList;

        return $new;
    }

    public function getProductList(): ?\Flexnet\EntitlementOrderService\Type\ProductStateChangeListType
    {
        return $this->productList;
    }

    public function withProductList(?\Flexnet\EntitlementOrderService\Type\ProductStateChangeListType $productList): \Flexnet\EntitlementOrderService\Type\StateChangeResponseType
    {
        $new = clone $this;
        $new->productList = $productList;

        return $new;
    }

    public function getLicenseModelList(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeListType
    {
        return $this->licenseModelList;
    }

    public function withLicenseModelList(?\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeListType $licenseModelList): \Flexnet\EntitlementOrderService\Type\StateChangeResponseType
    {
        $new = clone $this;
        $new->licenseModelList = $licenseModelList;

        return $new;
    }

    public function getSimpleEntitlementList(): ?\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType
    {
        return $this->simpleEntitlementList;
    }

    public function withSimpleEntitlementList(?\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType $simpleEntitlementList): \Flexnet\EntitlementOrderService\Type\StateChangeResponseType
    {
        $new = clone $this;
        $new->simpleEntitlementList = $simpleEntitlementList;

        return $new;
    }

    public function getBulkEntitlementList(): ?\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType
    {
        return $this->bulkEntitlementList;
    }

    public function withBulkEntitlementList(?\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType $bulkEntitlementList): \Flexnet\EntitlementOrderService\Type\StateChangeResponseType
    {
        $new = clone $this;
        $new->bulkEntitlementList = $bulkEntitlementList;

        return $new;
    }
}
