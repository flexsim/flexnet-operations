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
    public function __construct(FeatureBundleIdentifierWithCountDataType|array $featureBundle, string $opType)
    {
        $this->featureBundle = $featureBundle;
        $this->opType = $opType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>  $featureBundle
     */
    public static function create(FeatureBundleIdentifierWithCountDataType|array $featureBundle, string $opType)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>
     */
    public function getFeatureBundle(): FeatureBundleIdentifierWithCountDataType|array
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>  $featureBundle
     */
    public function withFeatureBundle(FeatureBundleIdentifierWithCountDataType|array $featureBundle): UpdateFeatureBundlesListType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }

    public function getOpType(): string
    {
        return $this->opType;
    }

    public function withOpType(string $opType): UpdateFeatureBundlesListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
