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
    public function __construct(CorrelationDataType|array $createdFeatureBundle = null)
    {
        $this->createdFeatureBundle = $createdFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CorrelationDataType|array<\Flexnet\ProductPackagingService\Type\CorrelationDataType>|null  $createdFeatureBundle
     */
    public static function create(CorrelationDataType|array $createdFeatureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CorrelationDataType|array<\Flexnet\ProductPackagingService\Type\CorrelationDataType>|null
     */
    public function getCreatedFeatureBundle(): CorrelationDataType|array|null
    {
        return $this->createdFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CorrelationDataType|array<\Flexnet\ProductPackagingService\Type\CorrelationDataType>|null  $createdFeatureBundle
     */
    public function withCreatedFeatureBundle(CorrelationDataType|array|null $createdFeatureBundle): CreatedFeatureBundleDataListType
    {
        $new = clone $this;
        $new->createdFeatureBundle = $createdFeatureBundle;

        return $new;
    }
}
