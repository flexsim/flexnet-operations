<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateFeatureDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
     */
    private $featureIdentifier;

    /**
     * @var string|null
     */
    private $featureName;

    /**
     * @var \Flexnet\ProductPackagingService\Type\VersionFormatType|null
     */
    private $versionFormat;

    /**
     * @var string|null
     */
    private $version;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType|null
     */
    private $featureOverrideParams;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier, ?string $featureName = null, ?\Flexnet\ProductPackagingService\Type\VersionFormatType $versionFormat = null, ?string $version = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType $featureOverrideParams = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->featureName = $featureName;
        $this->versionFormat = $versionFormat;
        $this->version = $version;
        $this->description = $description;
        $this->featureOverrideParams = $featureOverrideParams;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier, ?string $featureName = null, ?\Flexnet\ProductPackagingService\Type\VersionFormatType $versionFormat = null, ?string $version = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType $featureOverrideParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureIdentifier(): \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    public function withFeatureIdentifier(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier): \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    public function getFeatureName(): ?string
    {
        return $this->featureName;
    }

    public function withFeatureName(?string $featureName): \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureName = $featureName;

        return $new;
    }

    public function getVersionFormat(): ?\Flexnet\ProductPackagingService\Type\VersionFormatType
    {
        return $this->versionFormat;
    }

    public function withVersionFormat(?\Flexnet\ProductPackagingService\Type\VersionFormatType $versionFormat): \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType
    {
        $new = clone $this;
        $new->versionFormat = $versionFormat;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getFeatureOverrideParams(): ?\Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType
    {
        return $this->featureOverrideParams;
    }

    public function withFeatureOverrideParams(?\Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType $featureOverrideParams): \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureOverrideParams = $featureOverrideParams;

        return $new;
    }
}
