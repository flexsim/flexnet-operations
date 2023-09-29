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
     */
    public function __construct(FeatureIdentifierType $featureIdentifier, string $reason = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->reason = $reason;
    }

    public static function create(FeatureIdentifierType $featureIdentifier, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureIdentifier(): FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    public function withFeatureIdentifier(FeatureIdentifierType $featureIdentifier): FailedUpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedUpdateFeatureDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
