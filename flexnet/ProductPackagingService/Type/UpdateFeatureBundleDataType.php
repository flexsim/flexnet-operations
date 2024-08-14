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
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier, ?string $name = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\UpdateFeaturesListType $features = null)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->name = $name;
        $this->description = $description;
        $this->features = $features;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier, ?string $name = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\UpdateFeaturesListType $features = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundleIdentifier(): \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    public function withFeatureBundleIdentifier(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier): \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getFeatures(): ?\Flexnet\ProductPackagingService\Type\UpdateFeaturesListType
    {
        return $this->features;
    }

    public function withFeatures(?\Flexnet\ProductPackagingService\Type\UpdateFeaturesListType $features): \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }
}
