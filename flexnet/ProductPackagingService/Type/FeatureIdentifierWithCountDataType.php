<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureIdentifierWithCountDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
     */
    private $featureIdentifier;

    /**
     * @var \Flexnet\ProductPackagingService\Type\PositiveInteger
     */
    private $count;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier, \Flexnet\ProductPackagingService\Type\PositiveInteger $count)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->count = $count;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier, \Flexnet\ProductPackagingService\Type\PositiveInteger $count)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureIdentifier(): \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    public function withFeatureIdentifier(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier): \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    public function getCount(): \Flexnet\ProductPackagingService\Type\PositiveInteger
    {
        return $this->count;
    }

    public function withCount(\Flexnet\ProductPackagingService\Type\PositiveInteger $count): \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}
