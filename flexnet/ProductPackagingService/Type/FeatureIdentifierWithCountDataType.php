<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureIdentifierWithCountDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
     */
    private $featureIdentifier;

    /**
     * @var int
     */
    private $count;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierType  $featureIdentifier
     */
    public function __construct(FeatureIdentifierType $featureIdentifier, int $count)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->count = $count;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierType  $featureIdentifier
     */
    public static function create(FeatureIdentifierType $featureIdentifier, int $count)
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
    public function withFeatureIdentifier(FeatureIdentifierType $featureIdentifier): FeatureIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function withCount(int $count): FeatureIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}
