<?php

namespace Flexnet\LicenseService\Type;

class ReturnFulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

    /**
     * @var int|null
     */
    private $partialCount;

    /**
     * @var int|null
     */
    private $overDraftCount;

    /**
     * @var bool|null
     */
    private $overridePolicy;

    /**
     * @var bool|null
     */
    private $forceReturnOfThisTrustedFulfillment;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, ?int $partialCount = null, ?int $overDraftCount = null, ?bool $overridePolicy = null, ?bool $forceReturnOfThisTrustedFulfillment = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->partialCount = $partialCount;
        $this->overDraftCount = $overDraftCount;
        $this->overridePolicy = $overridePolicy;
        $this->forceReturnOfThisTrustedFulfillment = $forceReturnOfThisTrustedFulfillment;
    }

    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, ?int $partialCount = null, ?int $overDraftCount = null, ?bool $overridePolicy = null, ?bool $forceReturnOfThisTrustedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentIdentifier(): \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier): \Flexnet\LicenseService\Type\ReturnFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getPartialCount(): ?int
    {
        return $this->partialCount;
    }

    public function withPartialCount(?int $partialCount): \Flexnet\LicenseService\Type\ReturnFulfillmentDataType
    {
        $new = clone $this;
        $new->partialCount = $partialCount;

        return $new;
    }

    public function getOverDraftCount(): ?int
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(?int $overDraftCount): \Flexnet\LicenseService\Type\ReturnFulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getOverridePolicy(): ?bool
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(?bool $overridePolicy): \Flexnet\LicenseService\Type\ReturnFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getForceReturnOfThisTrustedFulfillment(): ?bool
    {
        return $this->forceReturnOfThisTrustedFulfillment;
    }

    public function withForceReturnOfThisTrustedFulfillment(?bool $forceReturnOfThisTrustedFulfillment): \Flexnet\LicenseService\Type\ReturnFulfillmentDataType
    {
        $new = clone $this;
        $new->forceReturnOfThisTrustedFulfillment = $forceReturnOfThisTrustedFulfillment;

        return $new;
    }
}
