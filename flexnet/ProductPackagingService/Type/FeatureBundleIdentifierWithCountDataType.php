<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureBundleIdentifierWithCountDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var \Flexnet\ProductPackagingService\Type\PositiveInteger
     */
    private $count;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier, \Flexnet\ProductPackagingService\Type\PositiveInteger $count)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->count = $count;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier, \Flexnet\ProductPackagingService\Type\PositiveInteger $count)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundleIdentifier(): \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    public function withFeatureBundleIdentifier(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier): \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }

    public function getCount(): \Flexnet\ProductPackagingService\Type\PositiveInteger
    {
        return $this->count;
    }

    public function withCount(\Flexnet\ProductPackagingService\Type\PositiveInteger $count): \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}
