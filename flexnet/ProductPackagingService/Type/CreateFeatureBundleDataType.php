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
    public function __construct(string $name, \Flexnet\ProductPackagingService\Type\FeaturesListType $features, ?string $description = null)
    {
        $this->name = $name;
        $this->features = $features;
        $this->description = $description;
    }

    public static function create(string $name, \Flexnet\ProductPackagingService\Type\FeaturesListType $features, ?string $description = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): \Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getFeatures(): \Flexnet\ProductPackagingService\Type\FeaturesListType
    {
        return $this->features;
    }

    public function withFeatures(\Flexnet\ProductPackagingService\Type\FeaturesListType $features): \Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }
}
