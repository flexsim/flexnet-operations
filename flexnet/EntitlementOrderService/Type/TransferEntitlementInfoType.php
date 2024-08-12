<?php

namespace Flexnet\EntitlementOrderService\Type;

class TransferEntitlementInfoType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var string
     */
    private $accountTo;

    /**
     * @var bool|null
     */
    private $retainExistingIds;

    /**
     * @var bool|null
     */
    private $returnActiveFulfillments;

    /**
     * @var bool|null
     */
    private $forceTransferEvenIfNoTargetUsers;

    /**
     * @var bool|null
     */
    private $forceTransferEvenIfParentAndChildSeparated;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier, string $accountTo, ?bool $retainExistingIds = null, ?bool $returnActiveFulfillments = null, ?bool $forceTransferEvenIfNoTargetUsers = null, ?bool $forceTransferEvenIfParentAndChildSeparated = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->accountTo = $accountTo;
        $this->retainExistingIds = $retainExistingIds;
        $this->returnActiveFulfillments = $returnActiveFulfillments;
        $this->forceTransferEvenIfNoTargetUsers = $forceTransferEvenIfNoTargetUsers;
        $this->forceTransferEvenIfParentAndChildSeparated = $forceTransferEvenIfParentAndChildSeparated;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier, string $accountTo, ?bool $retainExistingIds = null, ?bool $returnActiveFulfillments = null, ?bool $forceTransferEvenIfNoTargetUsers = null, ?bool $forceTransferEvenIfParentAndChildSeparated = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier): \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getAccountTo(): string
    {
        return $this->accountTo;
    }

    public function withAccountTo(string $accountTo): \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->accountTo = $accountTo;

        return $new;
    }

    public function getRetainExistingIds(): ?bool
    {
        return $this->retainExistingIds;
    }

    public function withRetainExistingIds(?bool $retainExistingIds): \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->retainExistingIds = $retainExistingIds;

        return $new;
    }

    public function getReturnActiveFulfillments(): ?bool
    {
        return $this->returnActiveFulfillments;
    }

    public function withReturnActiveFulfillments(?bool $returnActiveFulfillments): \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->returnActiveFulfillments = $returnActiveFulfillments;

        return $new;
    }

    public function getForceTransferEvenIfNoTargetUsers(): ?bool
    {
        return $this->forceTransferEvenIfNoTargetUsers;
    }

    public function withForceTransferEvenIfNoTargetUsers(?bool $forceTransferEvenIfNoTargetUsers): \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->forceTransferEvenIfNoTargetUsers = $forceTransferEvenIfNoTargetUsers;

        return $new;
    }

    public function getForceTransferEvenIfParentAndChildSeparated(): ?bool
    {
        return $this->forceTransferEvenIfParentAndChildSeparated;
    }

    public function withForceTransferEvenIfParentAndChildSeparated(?bool $forceTransferEvenIfParentAndChildSeparated): \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->forceTransferEvenIfParentAndChildSeparated = $forceTransferEvenIfParentAndChildSeparated;

        return $new;
    }
}
