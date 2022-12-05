<?php

namespace Flexnet\EntitlementOrderService\Type;

class TransferLineItemInfoType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var int
     */
    private $numberOfCopies;

    /**
     * @var bool|null
     */
    private $useSameActivationId;

    /**
     * @var string|null
     */
    private $customActivationId;

    /**
     * @var bool|null
     */
    private $generateActivationId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementBelongsTo;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  int  $numberOfCopies
     * @param  bool|null  $useSameActivationId
     * @param  string|null  $customActivationId
     * @param  bool|null  $generateActivationId
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementBelongsTo
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, bool|null $useSameActivationId = null, string|null $customActivationId = null, bool|null $generateActivationId = null, EntitlementIdentifierType $entitlementBelongsTo)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->numberOfCopies = $numberOfCopies;
        $this->useSameActivationId = $useSameActivationId;
        $this->customActivationId = $customActivationId;
        $this->generateActivationId = $generateActivationId;
        $this->entitlementBelongsTo = $entitlementBelongsTo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  int  $numberOfCopies
     * @param  bool|null  $useSameActivationId
     * @param  string|null  $customActivationId
     * @param  bool|null  $generateActivationId
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementBelongsTo
     */
    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, bool|null $useSameActivationId = null, string|null $customActivationId = null, bool|null $generateActivationId = null, EntitlementIdentifierType $entitlementBelongsTo)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): TransferLineItemInfoType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getNumberOfCopies(): int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int $numberOfCopies): TransferLineItemInfoType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getUseSameActivationId(): bool|null
    {
        return $this->useSameActivationId;
    }

    public function withUseSameActivationId(bool|null $useSameActivationId): TransferLineItemInfoType
    {
        $new = clone $this;
        $new->useSameActivationId = $useSameActivationId;

        return $new;
    }

    public function getCustomActivationId(): string|null
    {
        return $this->customActivationId;
    }

    public function withCustomActivationId(string|null $customActivationId): TransferLineItemInfoType
    {
        $new = clone $this;
        $new->customActivationId = $customActivationId;

        return $new;
    }

    public function getGenerateActivationId(): bool|null
    {
        return $this->generateActivationId;
    }

    public function withGenerateActivationId(bool|null $generateActivationId): TransferLineItemInfoType
    {
        $new = clone $this;
        $new->generateActivationId = $generateActivationId;

        return $new;
    }

    public function getEntitlementBelongsTo(): EntitlementIdentifierType
    {
        return $this->entitlementBelongsTo;
    }

    public function withEntitlementBelongsTo(EntitlementIdentifierType $entitlementBelongsTo): TransferLineItemInfoType
    {
        $new = clone $this;
        $new->entitlementBelongsTo = $entitlementBelongsTo;

        return $new;
    }
}
