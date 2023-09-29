<?php

namespace Flexnet\ProductPackagingService\Type;

class DeleteFeatureDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
     */
    private $featureIdentifier;

    /**
     * Constructor
     */
    public function __construct(FeatureIdentifierType $featureIdentifier)
    {
        $this->featureIdentifier = $featureIdentifier;
    }

    public static function create(FeatureIdentifierType $featureIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureIdentifier(): FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    public function withFeatureIdentifier(FeatureIdentifierType $featureIdentifier): DeleteFeatureDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }
}
