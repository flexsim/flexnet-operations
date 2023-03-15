<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureQueryDataType
{
    /**
     * @var string
     */
    private $uniqueId;

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
     * @var string
     */
    private $state;

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
    public function __construct(string $uniqueId, string $featureName, string $versionFormat, string $state, string|null $version = null, string|null $description = null, FeatureOverrideParamsType|null $featureOverrideParams = null)
    {
        $this->uniqueId = $uniqueId;
        $this->featureName = $featureName;
        $this->versionFormat = $versionFormat;
        $this->state = $state;
        $this->version = $version;
        $this->description = $description;
        $this->featureOverrideParams = $featureOverrideParams;
    }

    /**
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType|null  $featureOverrideParams
     */
    public static function create(string $uniqueId, string $featureName, string $versionFormat, string $state, string|null $version = null, string|null $description = null, FeatureOverrideParamsType|null $featureOverrideParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): FeatureQueryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getFeatureName(): string
    {
        return $this->featureName;
    }

    public function withFeatureName(string $featureName): FeatureQueryDataType
    {
        $new = clone $this;
        $new->featureName = $featureName;

        return $new;
    }

    public function getVersionFormat(): string
    {
        return $this->versionFormat;
    }

    public function withVersionFormat(string $versionFormat): FeatureQueryDataType
    {
        $new = clone $this;
        $new->versionFormat = $versionFormat;

        return $new;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): FeatureQueryDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): FeatureQueryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function withState(string $state): FeatureQueryDataType
    {
        $new = clone $this;
        $new->state = $state;

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
    public function withFeatureOverrideParams(FeatureOverrideParamsType|null $featureOverrideParams): FeatureQueryDataType
    {
        $new = clone $this;
        $new->featureOverrideParams = $featureOverrideParams;

        return $new;
    }
}
