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
    public function __construct(FeatureIdentifierType|array $featureIdentifier)
    {
        $this->featureIdentifier = $featureIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType|array<\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType>  $featureIdentifier
     */
    public static function create(FeatureIdentifierType|array $featureIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureIdentifier(): FeatureIdentifierType|array
    {
        return $this->featureIdentifier;
    }

    public function withFeatureIdentifier(FeatureIdentifierType|array $featureIdentifier): FeatureListType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }
}
