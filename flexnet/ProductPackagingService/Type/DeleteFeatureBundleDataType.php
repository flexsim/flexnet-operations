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
    public function __construct(FeatureBundleIdentifierType $featureBundleIdentifier)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
    }

    public static function create(FeatureBundleIdentifierType $featureBundleIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundleIdentifier(): FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    public function withFeatureBundleIdentifier(FeatureBundleIdentifierType $featureBundleIdentifier): DeleteFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }
}
