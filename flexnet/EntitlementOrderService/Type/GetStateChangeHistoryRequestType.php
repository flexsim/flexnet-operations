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

    public static function create(FeatureListType $featureList = null, FeatureBundleListType $featureBundleList = null, ProductListType $productList = null, LicenseModelListType $licenseModelList = null, EntitlementListType $simpleEntitlementList = null, EntitlementListType $bulkEntitlementList = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureList(): ?FeatureListType
    {
        return $this->featureList;
    }

    public function withFeatureList(?FeatureListType $featureList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->featureList = $featureList;

        return $new;
    }

    public function getFeatureBundleList(): ?FeatureBundleListType
    {
        return $this->featureBundleList;
    }

    public function withFeatureBundleList(?FeatureBundleListType $featureBundleList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->featureBundleList = $featureBundleList;

        return $new;
    }

    public function getProductList(): ?ProductListType
    {
        return $this->productList;
    }

    public function withProductList(?ProductListType $productList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->productList = $productList;

        return $new;
    }

    public function getLicenseModelList(): ?LicenseModelListType
    {
        return $this->licenseModelList;
    }

    public function withLicenseModelList(?LicenseModelListType $licenseModelList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->licenseModelList = $licenseModelList;

        return $new;
    }

    public function getSimpleEntitlementList(): ?EntitlementListType
    {
        return $this->simpleEntitlementList;
    }

    public function withSimpleEntitlementList(?EntitlementListType $simpleEntitlementList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->simpleEntitlementList = $simpleEntitlementList;

        return $new;
    }

    public function getBulkEntitlementList(): ?EntitlementListType
    {
        return $this->bulkEntitlementList;
    }

    public function withBulkEntitlementList(?EntitlementListType $bulkEntitlementList): GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementList = $bulkEntitlementList;

        return $new;
    }
}
