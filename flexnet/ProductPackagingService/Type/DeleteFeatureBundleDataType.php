<?php

namespace Flexnet\ProductPackagingService\Type;

class DeleteFeatureBundleDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundleIdentifier(): \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    public function withFeatureBundleIdentifier(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier): \Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }
}
