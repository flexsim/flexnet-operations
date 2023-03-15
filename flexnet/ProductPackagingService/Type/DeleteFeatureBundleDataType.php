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
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     */
    public function __construct(FeatureBundleIdentifierType $featureBundleIdentifier)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     */
    public static function create(FeatureBundleIdentifierType $featureBundleIdentifier)
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
    public function withFeatureBundleIdentifier(FeatureBundleIdentifierType $featureBundleIdentifier): DeleteFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }
}
