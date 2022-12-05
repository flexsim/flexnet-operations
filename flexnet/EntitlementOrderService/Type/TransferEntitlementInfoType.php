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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  string  $accountTo
     * @param  bool|null  $retainExistingIds
     * @param  bool|null  $returnActiveFulfillments
     * @param  bool|null  $forceTransferEvenIfNoTargetUsers
     * @param  bool|null  $forceTransferEvenIfParentAndChildSeparated
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, string $accountTo, bool|null $retainExistingIds = null, bool|null $returnActiveFulfillments = null, bool|null $forceTransferEvenIfNoTargetUsers = null, bool|null $forceTransferEvenIfParentAndChildSeparated = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->accountTo = $accountTo;
        $this->retainExistingIds = $retainExistingIds;
        $this->returnActiveFulfillments = $returnActiveFulfillments;
        $this->forceTransferEvenIfNoTargetUsers = $forceTransferEvenIfNoTargetUsers;
        $this->forceTransferEvenIfParentAndChildSeparated = $forceTransferEvenIfParentAndChildSeparated;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  string  $accountTo
     * @param  bool|null  $retainExistingIds
     * @param  bool|null  $returnActiveFulfillments
     * @param  bool|null  $forceTransferEvenIfNoTargetUsers
     * @param  bool|null  $forceTransferEvenIfParentAndChildSeparated
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, string $accountTo, bool|null $retainExistingIds = null, bool|null $returnActiveFulfillments = null, bool|null $forceTransferEvenIfNoTargetUsers = null, bool|null $forceTransferEvenIfParentAndChildSeparated = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getAccountTo(): string
    {
        return $this->accountTo;
    }

    public function withAccountTo(string $accountTo): TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->accountTo = $accountTo;

        return $new;
    }

    public function getRetainExistingIds(): bool|null
    {
        return $this->retainExistingIds;
    }

    public function withRetainExistingIds(bool|null $retainExistingIds): TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->retainExistingIds = $retainExistingIds;

        return $new;
    }

    public function getReturnActiveFulfillments(): bool|null
    {
        return $this->returnActiveFulfillments;
    }

    public function withReturnActiveFulfillments(bool|null $returnActiveFulfillments): TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->returnActiveFulfillments = $returnActiveFulfillments;

        return $new;
    }

    public function getForceTransferEvenIfNoTargetUsers(): bool|null
    {
        return $this->forceTransferEvenIfNoTargetUsers;
    }

    public function withForceTransferEvenIfNoTargetUsers(bool|null $forceTransferEvenIfNoTargetUsers): TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->forceTransferEvenIfNoTargetUsers = $forceTransferEvenIfNoTargetUsers;

        return $new;
    }

    public function getForceTransferEvenIfParentAndChildSeparated(): bool|null
    {
        return $this->forceTransferEvenIfParentAndChildSeparated;
    }

    public function withForceTransferEvenIfParentAndChildSeparated(bool|null $forceTransferEvenIfParentAndChildSeparated): TransferEntitlementInfoType
    {
        $new = clone $this;
        $new->forceTransferEvenIfParentAndChildSeparated = $forceTransferEvenIfParentAndChildSeparated;

        return $new;
    }
}
