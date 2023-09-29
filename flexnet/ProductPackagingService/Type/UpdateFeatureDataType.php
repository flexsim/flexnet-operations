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
     * @var string|null
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
    public function __construct(FeatureIdentifierType $featureIdentifier, string $featureName = null, string $versionFormat = null, string $version = null, string $description = null, FeatureOverrideParamsType $featureOverrideParams = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->featureName = $featureName;
        $this->versionFormat = $versionFormat;
        $this->version = $version;
        $this->description = $description;
        $this->featureOverrideParams = $featureOverrideParams;
    }

    public static function create(FeatureIdentifierType $featureIdentifier, string $featureName = null, string $versionFormat = null, string $version = null, string $description = null, FeatureOverrideParamsType $featureOverrideParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureIdentifier(): FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    public function withFeatureIdentifier(FeatureIdentifierType $featureIdentifier): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    public function getFeatureName(): ?string
    {
        return $this->featureName;
    }

    public function withFeatureName(?string $featureName): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureName = $featureName;

        return $new;
    }

    public function getVersionFormat(): ?string
    {
        return $this->versionFormat;
    }

    public function withVersionFormat(?string $versionFormat): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->versionFormat = $versionFormat;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getFeatureOverrideParams(): ?FeatureOverrideParamsType
    {
        return $this->featureOverrideParams;
    }

    public function withFeatureOverrideParams(?FeatureOverrideParamsType $featureOverrideParams): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureOverrideParams = $featureOverrideParams;

        return $new;
    }
}
