<?php

namespace Flexnet\ProductPackagingService\Type;

class CreateFeatureBundleDataType
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FeaturesListType
     */
    private $features;

    /**
     * Constructor
     */
    public function __construct(string $name, FeaturesListType $features, string $description = null)
    {
        $this->name = $name;
        $this->features = $features;
        $this->description = $description;
    }

    public static function create(string $name, FeaturesListType $features, string $description = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): CreateFeatureBundleDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): CreateFeatureBundleDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getFeatures(): FeaturesListType
    {
        return $this->features;
    }

    public function withFeatures(FeaturesListType $features): CreateFeatureBundleDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }
}
