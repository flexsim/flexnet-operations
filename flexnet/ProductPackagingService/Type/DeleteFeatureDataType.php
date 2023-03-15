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
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierType  $featureIdentifier
     */
    public function __construct(FeatureIdentifierType $featureIdentifier)
    {
        $this->featureIdentifier = $featureIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierType  $featureIdentifier
     */
    public static function create(FeatureIdentifierType $featureIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
     */
    public function getFeatureIdentifier(): FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierType  $featureIdentifier
     */
    public function withFeatureIdentifier(FeatureIdentifierType $featureIdentifier): DeleteFeatureDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }
}
