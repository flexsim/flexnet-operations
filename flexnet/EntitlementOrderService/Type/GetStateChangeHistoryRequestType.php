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
    public function __construct(?\Flexnet\EntitlementOrderService\Type\FeatureListType $featureList = null, ?\Flexnet\EntitlementOrderService\Type\FeatureBundleListType $featureBundleList = null, ?\Flexnet\EntitlementOrderService\Type\ProductListType $productList = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelListType $licenseModelList = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementListType $simpleEntitlementList = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementListType $bulkEntitlementList = null)
    {
        $this->featureList = $featureList;
        $this->featureBundleList = $featureBundleList;
        $this->productList = $productList;
        $this->licenseModelList = $licenseModelList;
        $this->simpleEntitlementList = $simpleEntitlementList;
        $this->bulkEntitlementList = $bulkEntitlementList;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\FeatureListType $featureList = null, ?\Flexnet\EntitlementOrderService\Type\FeatureBundleListType $featureBundleList = null, ?\Flexnet\EntitlementOrderService\Type\ProductListType $productList = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelListType $licenseModelList = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementListType $simpleEntitlementList = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementListType $bulkEntitlementList = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureList(): ?\Flexnet\EntitlementOrderService\Type\FeatureListType
    {
        return $this->featureList;
    }

    public function withFeatureList(?\Flexnet\EntitlementOrderService\Type\FeatureListType $featureList): \Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->featureList = $featureList;

        return $new;
    }

    public function getFeatureBundleList(): ?\Flexnet\EntitlementOrderService\Type\FeatureBundleListType
    {
        return $this->featureBundleList;
    }

    public function withFeatureBundleList(?\Flexnet\EntitlementOrderService\Type\FeatureBundleListType $featureBundleList): \Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->featureBundleList = $featureBundleList;

        return $new;
    }

    public function getProductList(): ?\Flexnet\EntitlementOrderService\Type\ProductListType
    {
        return $this->productList;
    }

    public function withProductList(?\Flexnet\EntitlementOrderService\Type\ProductListType $productList): \Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->productList = $productList;

        return $new;
    }

    public function getLicenseModelList(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelListType
    {
        return $this->licenseModelList;
    }

    public function withLicenseModelList(?\Flexnet\EntitlementOrderService\Type\LicenseModelListType $licenseModelList): \Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->licenseModelList = $licenseModelList;

        return $new;
    }

    public function getSimpleEntitlementList(): ?\Flexnet\EntitlementOrderService\Type\EntitlementListType
    {
        return $this->simpleEntitlementList;
    }

    public function withSimpleEntitlementList(?\Flexnet\EntitlementOrderService\Type\EntitlementListType $simpleEntitlementList): \Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->simpleEntitlementList = $simpleEntitlementList;

        return $new;
    }

    public function getBulkEntitlementList(): ?\Flexnet\EntitlementOrderService\Type\EntitlementListType
    {
        return $this->bulkEntitlementList;
    }

    public function withBulkEntitlementList(?\Flexnet\EntitlementOrderService\Type\EntitlementListType $bulkEntitlementList): \Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementList = $bulkEntitlementList;

        return $new;
    }
}
