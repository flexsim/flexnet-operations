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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementBelongsTo, ?bool $useSameActivationId = null, ?string $customActivationId = null, ?bool $generateActivationId = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->numberOfCopies = $numberOfCopies;
        $this->entitlementBelongsTo = $entitlementBelongsTo;
        $this->useSameActivationId = $useSameActivationId;
        $this->customActivationId = $customActivationId;
        $this->generateActivationId = $generateActivationId;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementBelongsTo, ?bool $useSameActivationId = null, ?string $customActivationId = null, ?bool $generateActivationId = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier): \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getNumberOfCopies(): int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int $numberOfCopies): \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getUseSameActivationId(): ?bool
    {
        return $this->useSameActivationId;
    }

    public function withUseSameActivationId(?bool $useSameActivationId): \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType
    {
        $new = clone $this;
        $new->useSameActivationId = $useSameActivationId;

        return $new;
    }

    public function getCustomActivationId(): ?string
    {
        return $this->customActivationId;
    }

    public function withCustomActivationId(?string $customActivationId): \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType
    {
        $new = clone $this;
        $new->customActivationId = $customActivationId;

        return $new;
    }

    public function getGenerateActivationId(): ?bool
    {
        return $this->generateActivationId;
    }

    public function withGenerateActivationId(?bool $generateActivationId): \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType
    {
        $new = clone $this;
        $new->generateActivationId = $generateActivationId;

        return $new;
    }

    public function getEntitlementBelongsTo(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->entitlementBelongsTo;
    }

    public function withEntitlementBelongsTo(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementBelongsTo): \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType
    {
        $new = clone $this;
        $new->entitlementBelongsTo = $entitlementBelongsTo;

        return $new;
    }
}
