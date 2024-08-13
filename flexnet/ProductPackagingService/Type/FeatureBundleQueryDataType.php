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
     */
    public function __construct(string $uniqueId, string $name, string $state, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\FeaturesListType $features = null)
    {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->state = $state;
        $this->description = $description;
        $this->features = $features;
    }

    public static function create(string $uniqueId, string $name, string $state, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\FeaturesListType $features = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function withState(string $state): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getFeatures(): ?\Flexnet\ProductPackagingService\Type\FeaturesListType
    {
        return $this->features;
    }

    public function withFeatures(?\Flexnet\ProductPackagingService\Type\FeaturesListType $features): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }
}
