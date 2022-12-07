<?php

namespace Flexnet\EntitlementOrderService\Type;

class FeatureBundleListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType>
     */
    private $featureBundleIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType>  $featureBundleIdentifier
     */
    public function __construct(FeatureBundleIdentifierType|array $featureBundleIdentifier)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType>  $featureBundleIdentifier
     */
    public static function create(FeatureBundleIdentifierType|array $featureBundleIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType>
     */
    public function getFeatureBundleIdentifier(): FeatureBundleIdentifierType|array
    {
        return $this->featureBundleIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType>  $featureBundleIdentifier
     * @return FeatureBundleListType
     */
    public function withFeatureBundleIdentifier(FeatureBundleIdentifierType|array $featureBundleIdentifier): FeatureBundleListType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }
}
