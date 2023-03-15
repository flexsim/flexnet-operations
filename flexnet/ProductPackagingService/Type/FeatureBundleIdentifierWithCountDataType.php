<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureBundleIdentifierWithCountDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var int
     */
    private $count;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     */
    public function __construct(FeatureBundleIdentifierType $featureBundleIdentifier, int $count)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->count = $count;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     */
    public static function create(FeatureBundleIdentifierType $featureBundleIdentifier, int $count)
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
    public function withFeatureBundleIdentifier(FeatureBundleIdentifierType $featureBundleIdentifier): FeatureBundleIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function withCount(int $count): FeatureBundleIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}
