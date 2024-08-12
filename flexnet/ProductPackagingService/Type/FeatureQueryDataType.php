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
     * @var \Flexnet\ProductPackagingService\Type\VersionFormatType
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
     * @var \Flexnet\ProductPackagingService\Type\StateType
     */
    private $state;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType|null
     */
    private $featureOverrideParams;

    /**
     * Constructor
     */
    public function __construct(string $uniqueId, string $featureName, \Flexnet\ProductPackagingService\Type\VersionFormatType $versionFormat, \Flexnet\ProductPackagingService\Type\StateType $state, ?string $version = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType $featureOverrideParams = null)
    {
        $this->uniqueId = $uniqueId;
        $this->featureName = $featureName;
        $this->versionFormat = $versionFormat;
        $this->state = $state;
        $this->version = $version;
        $this->description = $description;
        $this->featureOverrideParams = $featureOverrideParams;
    }

    public static function create(string $uniqueId, string $featureName, \Flexnet\ProductPackagingService\Type\VersionFormatType $versionFormat, \Flexnet\ProductPackagingService\Type\StateType $state, ?string $version = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType $featureOverrideParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): \Flexnet\ProductPackagingService\Type\FeatureQueryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getFeatureName(): string
    {
        return $this->featureName;
    }

    public function withFeatureName(string $featureName): \Flexnet\ProductPackagingService\Type\FeatureQueryDataType
    {
        $new = clone $this;
        $new->featureName = $featureName;

        return $new;
    }

    public function getVersionFormat(): \Flexnet\ProductPackagingService\Type\VersionFormatType
    {
        return $this->versionFormat;
    }

    public function withVersionFormat(\Flexnet\ProductPackagingService\Type\VersionFormatType $versionFormat): \Flexnet\ProductPackagingService\Type\FeatureQueryDataType
    {
        $new = clone $this;
        $new->versionFormat = $versionFormat;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): \Flexnet\ProductPackagingService\Type\FeatureQueryDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\ProductPackagingService\Type\FeatureQueryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): \Flexnet\ProductPackagingService\Type\StateType
    {
        return $this->state;
    }

    public function withState(\Flexnet\ProductPackagingService\Type\StateType $state): \Flexnet\ProductPackagingService\Type\FeatureQueryDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getFeatureOverrideParams(): ?\Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType
    {
        return $this->featureOverrideParams;
    }

    public function withFeatureOverrideParams(?\Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType $featureOverrideParams): \Flexnet\ProductPackagingService\Type\FeatureQueryDataType
    {
        $new = clone $this;
        $new->featureOverrideParams = $featureOverrideParams;

        return $new;
    }
}
