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
     *
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType|null  $featureOverrideParams
     */
    public function __construct(string $featureName, string $versionFormat, string|null $version = null, string|null $description = null, FeatureOverrideParamsType|null $featureOverrideParams = null)
    {
        $this->featureName = $featureName;
        $this->versionFormat = $versionFormat;
        $this->version = $version;
        $this->description = $description;
        $this->featureOverrideParams = $featureOverrideParams;
    }

    /**
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType|null  $featureOverrideParams
     */
    public static function create(string $featureName, string $versionFormat, string|null $version = null, string|null $description = null, FeatureOverrideParamsType|null $featureOverrideParams = null)
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

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): FeatureDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): FeatureDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType|null
     */
    public function getFeatureOverrideParams(): FeatureOverrideParamsType|null
    {
        return $this->featureOverrideParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType|null  $featureOverrideParams
     */
    public function withFeatureOverrideParams(FeatureOverrideParamsType|null $featureOverrideParams): FeatureDataType
    {
        $new = clone $this;
        $new->featureOverrideParams = $featureOverrideParams;

        return $new;
    }
}
