<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateFeaturesListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null
     */
    private $feature;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CollectionOperationType
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CollectionOperationType $opType, \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array|null $feature = null)
    {
        $this->opType = $opType;
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CollectionOperationType $opType, \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array|null $feature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null
     */
    public function getFeature(): \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array|null
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public function withFeature(\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array|null $feature): \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }

    public function getOpType(): \Flexnet\ProductPackagingService\Type\CollectionOperationType
    {
        return $this->opType;
    }

    public function withOpType(\Flexnet\ProductPackagingService\Type\CollectionOperationType $opType): \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
