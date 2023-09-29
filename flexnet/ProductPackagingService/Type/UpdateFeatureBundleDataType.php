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
     */
    public function __construct(FeatureBundleIdentifierType $featureBundleIdentifier, string $name = null, string $description = null, UpdateFeaturesListType $features = null)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->name = $name;
        $this->description = $description;
        $this->features = $features;
    }

    public static function create(FeatureBundleIdentifierType $featureBundleIdentifier, string $name = null, string $description = null, UpdateFeaturesListType $features = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundleIdentifier(): FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    public function withFeatureBundleIdentifier(FeatureBundleIdentifierType $featureBundleIdentifier): UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getFeatures(): ?UpdateFeaturesListType
    {
        return $this->features;
    }

    public function withFeatures(?UpdateFeaturesListType $features): UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }
}
