<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateFeatureDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
     */
    private $featureIdentifier;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierType  $featureIdentifier
     * @param  string|null  $reason
     */
    public function __construct(FeatureIdentifierType $featureIdentifier, string|null $reason = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierType  $featureIdentifier
     * @param  string|null  $reason
     */
    public static function create(FeatureIdentifierType $featureIdentifier, string|null $reason = null)
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
    public function withFeatureIdentifier(FeatureIdentifierType $featureIdentifier): FailedUpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedUpdateFeatureDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
