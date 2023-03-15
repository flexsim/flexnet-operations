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
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeaturesListType  $features
     * @param  string|null  $description
     */
    public function __construct(string $name, FeaturesListType $features, string|null $description = null)
    {
        $this->name = $name;
        $this->features = $features;
        $this->description = $description;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeaturesListType  $features
     * @param  string|null  $description
     */
    public static function create(string $name, FeaturesListType $features, string|null $description = null)
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

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): CreateFeatureBundleDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeaturesListType
     */
    public function getFeatures(): FeaturesListType
    {
        return $this->features;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeaturesListType  $features
     */
    public function withFeatures(FeaturesListType $features): CreateFeatureBundleDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }
}
