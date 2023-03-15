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
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  int|null  $partialCount
     * @param  int|null  $overDraftCount
     * @param  bool|null  $overridePolicy
     * @param  bool|null  $forceReturnOfThisTrustedFulfillment
     */
    public function __construct(FulfillmentIdentifierType $fulfillmentIdentifier, int|null $partialCount = null, int|null $overDraftCount = null, bool|null $overridePolicy = null, bool|null $forceReturnOfThisTrustedFulfillment = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->partialCount = $partialCount;
        $this->overDraftCount = $overDraftCount;
        $this->overridePolicy = $overridePolicy;
        $this->forceReturnOfThisTrustedFulfillment = $forceReturnOfThisTrustedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  int|null  $partialCount
     * @param  int|null  $overDraftCount
     * @param  bool|null  $overridePolicy
     * @param  bool|null  $forceReturnOfThisTrustedFulfillment
     */
    public static function create(FulfillmentIdentifierType $fulfillmentIdentifier, int|null $partialCount = null, int|null $overDraftCount = null, bool|null $overridePolicy = null, bool|null $forceReturnOfThisTrustedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier(): FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     */
    public function withFulfillmentIdentifier(FulfillmentIdentifierType $fulfillmentIdentifier): ReturnFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getPartialCount(): int|null
    {
        return $this->partialCount;
    }

    public function withPartialCount(int|null $partialCount): ReturnFulfillmentDataType
    {
        $new = clone $this;
        $new->partialCount = $partialCount;

        return $new;
    }

    public function getOverDraftCount(): int|null
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(int|null $overDraftCount): ReturnFulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getOverridePolicy(): bool|null
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(bool|null $overridePolicy): ReturnFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getForceReturnOfThisTrustedFulfillment(): bool|null
    {
        return $this->forceReturnOfThisTrustedFulfillment;
    }

    public function withForceReturnOfThisTrustedFulfillment(bool|null $forceReturnOfThisTrustedFulfillment): ReturnFulfillmentDataType
    {
        $new = clone $this;
        $new->forceReturnOfThisTrustedFulfillment = $forceReturnOfThisTrustedFulfillment;

        return $new;
    }
}
