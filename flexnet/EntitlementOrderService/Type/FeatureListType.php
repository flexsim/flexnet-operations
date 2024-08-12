<?php

namespace Flexnet\EntitlementOrderService\Type;

class FeatureListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType>
     */
    private $featureIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType>  $featureIdentifier
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType|array $featureIdentifier)
    {
        $this->featureIdentifier = $featureIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType>  $featureIdentifier
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType|array $featureIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType>
     */
    public function getFeatureIdentifier(): \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType|array
    {
        return $this->featureIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType>  $featureIdentifier
     */
    public function withFeatureIdentifier(\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType|array $featureIdentifier): \Flexnet\EntitlementOrderService\Type\FeatureListType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }
}
