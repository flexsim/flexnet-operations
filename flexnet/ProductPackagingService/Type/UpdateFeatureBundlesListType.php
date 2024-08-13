<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateFeatureBundlesListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>
     */
    private $featureBundle;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>  $featureBundle
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array $featureBundle, string $opType)
    {
        $this->featureBundle = $featureBundle;
        $this->opType = $opType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>  $featureBundle
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array $featureBundle, string $opType)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>
     */
    public function getFeatureBundle(): \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>  $featureBundle
     */
    public function withFeatureBundle(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array $featureBundle): \Flexnet\ProductPackagingService\Type\UpdateFeatureBundlesListType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }

    public function getOpType(): string
    {
        return $this->opType;
    }

    public function withOpType(string $opType): \Flexnet\ProductPackagingService\Type\UpdateFeatureBundlesListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
