<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureDataType
{
    /**
     * @var string
     */
    private $featureName;

    /**
     * @var string
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
    public function __construct(string $featureName, string $versionFormat, string $version = null, string $description = null, FeatureOverrideParamsType $featureOverrideParams = null)
    {
        $this->featureName = $featureName;
        $this->versionFormat = $versionFormat;
        $this->version = $version;
        $this->description = $description;
        $this->featureOverrideParams = $featureOverrideParams;
    }

    public static function create(string $featureName, string $versionFormat, string $version = null, string $description = null, FeatureOverrideParamsType $featureOverrideParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureName(): string
    {
        return $this->featureName;
    }

    public function withFeatureName(string $featureName): FeatureDataType
    {
        $new = clone $this;
        $new->featureName = $featureName;

        return $new;
    }

    public function getVersionFormat(): string
    {
        return $this->versionFormat;
    }

    public function withVersionFormat(string $versionFormat): FeatureDataType
    {
        $new = clone $this;
        $new->versionFormat = $versionFormat;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): FeatureDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): FeatureDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getFeatureOverrideParams(): ?FeatureOverrideParamsType
    {
        return $this->featureOverrideParams;
    }

    public function withFeatureOverrideParams(?FeatureOverrideParamsType $featureOverrideParams): FeatureDataType
    {
        $new = clone $this;
        $new->featureOverrideParams = $featureOverrideParams;

        return $new;
    }
}
