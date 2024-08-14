<?php

namespace Flexnet\ProductPackagingService\Type;

class CreatedFeatureBundleDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CorrelationDataType|array<\Flexnet\ProductPackagingService\Type\CorrelationDataType>|null
     */
    private $createdFeatureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CorrelationDataType|array<\Flexnet\ProductPackagingService\Type\CorrelationDataType>|null  $createdFeatureBundle
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CorrelationDataType|array|null $createdFeatureBundle = null)
    {
        $this->createdFeatureBundle = $createdFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CorrelationDataType|array<\Flexnet\ProductPackagingService\Type\CorrelationDataType>|null  $createdFeatureBundle
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CorrelationDataType|array|null $createdFeatureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CorrelationDataType|array<\Flexnet\ProductPackagingService\Type\CorrelationDataType>|null
     */
    public function getCreatedFeatureBundle(): \Flexnet\ProductPackagingService\Type\CorrelationDataType|array|null
    {
        return $this->createdFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CorrelationDataType|array<\Flexnet\ProductPackagingService\Type\CorrelationDataType>|null  $createdFeatureBundle
     */
    public function withCreatedFeatureBundle(\Flexnet\ProductPackagingService\Type\CorrelationDataType|array|null $createdFeatureBundle): \Flexnet\ProductPackagingService\Type\CreatedFeatureBundleDataListType
    {
        $new = clone $this;
        $new->createdFeatureBundle = $createdFeatureBundle;

        return $new;
    }
}
