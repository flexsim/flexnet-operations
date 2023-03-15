<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateFeaturesListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null
     */
    private $feature;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public function __construct(string $opType, FeatureIdentifierWithCountDataType|array|null $feature = null)
    {
        $this->opType = $opType;
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public static function create(string $opType, FeatureIdentifierWithCountDataType|array|null $feature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null
     */
    public function getFeature(): FeatureIdentifierWithCountDataType|array|null
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public function withFeature(FeatureIdentifierWithCountDataType|array|null $feature): UpdateFeaturesListType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }

    public function getOpType(): string
    {
        return $this->opType;
    }

    public function withOpType(string $opType): UpdateFeaturesListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
