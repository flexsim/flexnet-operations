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
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierType  $featureIdentifier
     * @param  string|null  $featureName
     * @param  string|null  $versionFormat
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType|null  $featureOverrideParams
     */
    public function __construct(FeatureIdentifierType $featureIdentifier, string|null $featureName = null, string|null $versionFormat = null, string|null $version = null, string|null $description = null, FeatureOverrideParamsType|null $featureOverrideParams = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->featureName = $featureName;
        $this->versionFormat = $versionFormat;
        $this->version = $version;
        $this->description = $description;
        $this->featureOverrideParams = $featureOverrideParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierType  $featureIdentifier
     * @param  string|null  $featureName
     * @param  string|null  $versionFormat
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType|null  $featureOverrideParams
     */
    public static function create(FeatureIdentifierType $featureIdentifier, string|null $featureName = null, string|null $versionFormat = null, string|null $version = null, string|null $description = null, FeatureOverrideParamsType|null $featureOverrideParams = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
     */
    public function getFeatureIdentifier(): FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierType  $featureIdentifier
     */
    public function withFeatureIdentifier(FeatureIdentifierType $featureIdentifier): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    public function getFeatureName(): string|null
    {
        return $this->featureName;
    }

    public function withFeatureName(string|null $featureName): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureName = $featureName;

        return $new;
    }

    public function getVersionFormat(): string|null
    {
        return $this->versionFormat;
    }

    public function withVersionFormat(string|null $versionFormat): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->versionFormat = $versionFormat;

        return $new;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): UpdateFeatureDataType
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
    public function withFeatureOverrideParams(FeatureOverrideParamsType|null $featureOverrideParams): UpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureOverrideParams = $featureOverrideParams;

        return $new;
    }
}
