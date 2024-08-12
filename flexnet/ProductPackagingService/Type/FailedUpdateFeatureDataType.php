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
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier, ?string $reason = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureIdentifier(): \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    public function withFeatureIdentifier(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier): \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
