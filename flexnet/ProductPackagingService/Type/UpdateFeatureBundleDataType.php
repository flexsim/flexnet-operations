<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateFeatureBundleDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType|null
     */
    private $features;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     * @param  string|null  $name
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType|null  $features
     */
    public function __construct(FeatureBundleIdentifierType $featureBundleIdentifier, string|null $name = null, string|null $description = null, UpdateFeaturesListType|null $features = null)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->name = $name;
        $this->description = $description;
        $this->features = $features;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     * @param  string|null  $name
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType|null  $features
     */
    public static function create(FeatureBundleIdentifierType $featureBundleIdentifier, string|null $name = null, string|null $description = null, UpdateFeaturesListType|null $features = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
     */
    public function getFeatureBundleIdentifier(): FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     */
    public function withFeatureBundleIdentifier(FeatureBundleIdentifierType $featureBundleIdentifier): UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }

    public function getName(): string|null
    {
        return $this->name;
    }

    public function withName(string|null $name): UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType|null
     */
    public function getFeatures(): UpdateFeaturesListType|null
    {
        return $this->features;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType|null  $features
     */
    public function withFeatures(UpdateFeaturesListType|null $features): UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }
}
