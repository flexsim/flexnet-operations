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
     */
    public function __construct(string $uniqueId, string $featureName, string $versionFormat, string $state, string $version = null, string $description = null, FeatureOverrideParamsType $featureOverrideParams = null)
    {
        $this->uniqueId = $uniqueId;
        $this->featureName = $featureName;
        $this->versionFormat = $versionFormat;
        $this->state = $state;
        $this->version = $version;
        $this->description = $description;
        $this->featureOverrideParams = $featureOverrideParams;
    }

    public static function create(string $uniqueId, string $featureName, string $versionFormat, string $state, string $version = null, string $description = null, FeatureOverrideParamsType $featureOverrideParams = null)
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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): FeatureQueryDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): FeatureQueryDataType
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

    public function getFeatureOverrideParams(): ?FeatureOverrideParamsType
    {
        return $this->featureOverrideParams;
    }

    public function withFeatureOverrideParams(?FeatureOverrideParamsType $featureOverrideParams): FeatureQueryDataType
    {
        $new = clone $this;
        $new->featureOverrideParams = $featureOverrideParams;

        return $new;
    }
}
