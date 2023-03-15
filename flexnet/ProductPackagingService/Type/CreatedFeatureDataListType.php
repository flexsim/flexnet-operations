<?php

namespace Flexnet\ProductPackagingService\Type;

class CreatedFeatureDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\CreatedFeatureDataType>|null
     */
    private $createdFeature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreatedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\CreatedFeatureDataType>|null  $createdFeature
     */
    public function __construct(CreatedFeatureDataType|array|null $createdFeature = null)
    {
        $this->createdFeature = $createdFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\CreatedFeatureDataType>|null  $createdFeature
     */
    public static function create(CreatedFeatureDataType|array|null $createdFeature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\CreatedFeatureDataType>|null
     */
    public function getCreatedFeature(): CreatedFeatureDataType|array|null
    {
        return $this->createdFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\CreatedFeatureDataType>|null  $createdFeature
     */
    public function withCreatedFeature(CreatedFeatureDataType|array|null $createdFeature): CreatedFeatureDataListType
    {
        $new = clone $this;
        $new->createdFeature = $createdFeature;

        return $new;
    }
}
