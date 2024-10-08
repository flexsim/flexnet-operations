<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeleteFeatureBundleDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier, ?string $reason = null)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundleIdentifier(): \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    public function withFeatureBundleIdentifier(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier): \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
