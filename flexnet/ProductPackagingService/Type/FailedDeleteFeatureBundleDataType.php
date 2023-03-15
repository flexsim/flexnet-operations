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
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     * @param  string|null  $reason
     */
    public function __construct(FeatureBundleIdentifierType $featureBundleIdentifier, string|null $reason = null)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     * @param  string|null  $reason
     */
    public static function create(FeatureBundleIdentifierType $featureBundleIdentifier, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
     */
    public function getFeatureBundleIdentifier(): FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     */
    public function withFeatureBundleIdentifier(FeatureBundleIdentifierType $featureBundleIdentifier): FailedDeleteFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedDeleteFeatureBundleDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
