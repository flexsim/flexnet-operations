<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureBundleQueryDataType
{
    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string
     */
    private $state;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FeaturesListType|null
     */
    private $features;

    /**
     * Constructor
     *
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\FeaturesListType|null  $features
     */
    public function __construct(string $uniqueId, string $name, string $state, string|null $description = null, FeaturesListType|null $features = null)
    {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->state = $state;
        $this->description = $description;
        $this->features = $features;
    }

    /**
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\FeaturesListType|null  $features
     */
    public static function create(string $uniqueId, string $name, string $state, string|null $description = null, FeaturesListType|null $features = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): FeatureBundleQueryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): FeatureBundleQueryDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): FeatureBundleQueryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function withState(string $state): FeatureBundleQueryDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeaturesListType|null
     */
    public function getFeatures(): FeaturesListType|null
    {
        return $this->features;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeaturesListType|null  $features
     */
    public function withFeatures(FeaturesListType|null $features): FeatureBundleQueryDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }
}
