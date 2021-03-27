<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferEntitlementInfoType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var string
     */
    private $accountTo;

    /**
     * @var string
     */
    private $organizationTo;

    /**
     * @var bool
     */
    private $retainExistingIds;

    /**
     * @var bool
     */
    private $returnActiveFulfillments;

    /**
     * @var bool
     */
    private $forceTransferEvenIfNoTargetUsers;

    /**
     * @var bool
     */
    private $forceTransferEvenIfParentAndChildSeparated;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var string $accountTo this method is backwards compatible so your may also pass $organizationTo
     * @var bool $retainExistingIds
     * @var bool $returnActiveFulfillments
     * @var bool $forceTransferEvenIfNoTargetUsers
     * @var bool $forceTransferEvenIfParentAndChildSeparated
     */
    public function __construct(
        \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier,
        string $accountTo,
        bool $retainExistingIds = null,
        bool $returnActiveFulfillments = null,
        bool $forceTransferEvenIfNoTargetUsers = null,
        bool $forceTransferEvenIfParentAndChildSeparated = null
    ) {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->accountTo = $accountTo;
        $this->organizationTo = $accountTo;
        $this->retainExistingIds = $retainExistingIds;
        $this->returnActiveFulfillments = $returnActiveFulfillments;
        $this->forceTransferEvenIfNoTargetUsers = $forceTransferEvenIfNoTargetUsers;
        $this->forceTransferEvenIfParentAndChildSeparated = $forceTransferEvenIfParentAndChildSeparated;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var string $accountTo this method is backwards compatible so your may also pass $organizationTo
     * @var bool $retainExistingIds
     * @var bool $returnActiveFulfillments
     * @var bool $forceTransferEvenIfNoTargetUsers
     * @var bool $forceTransferEvenIfParentAndChildSeparated
     */
    public static function create(
        \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier,
        string $accountTo,
        bool $retainExistingIds = null,
        bool $returnActiveFulfillments = null,
        bool $forceTransferEvenIfNoTargetUsers = null,
        bool $forceTransferEvenIfParentAndChildSeparated = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier()
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @return $this
     */
    public function setEntitlementIdentifier($entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountTo()
    {
        return $this->accountTo;
    }

    /**
     * @param string $accountTo
     * @return $this
     */
    public function setAccountTo($accountTo)
    {
        $this->accountTo = $accountTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationTo()
    {
        return $this->organizationTo;
    }

    /**
     * @param string $organizationTo
     * @return $this
     */
    public function setOrganizationTo($organizationTo)
    {
        $this->organizationTo = $organizationTo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRetainExistingIds()
    {
        return $this->retainExistingIds;
    }

    /**
     * @param bool $retainExistingIds
     * @return $this
     */
    public function setRetainExistingIds($retainExistingIds)
    {
        $this->retainExistingIds = $retainExistingIds;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReturnActiveFulfillments()
    {
        return $this->returnActiveFulfillments;
    }

    /**
     * @param bool $returnActiveFulfillments
     * @return $this
     */
    public function setReturnActiveFulfillments($returnActiveFulfillments)
    {
        $this->returnActiveFulfillments = $returnActiveFulfillments;
        return $this;
    }

    /**
     * @return bool
     */
    public function getForceTransferEvenIfNoTargetUsers()
    {
        return $this->forceTransferEvenIfNoTargetUsers;
    }

    /**
     * @param bool $forceTransferEvenIfNoTargetUsers
     * @return $this
     */
    public function setForceTransferEvenIfNoTargetUsers($forceTransferEvenIfNoTargetUsers)
    {
        $this->forceTransferEvenIfNoTargetUsers = $forceTransferEvenIfNoTargetUsers;
        return $this;
    }

    /**
     * @return bool
     */
    public function getForceTransferEvenIfParentAndChildSeparated()
    {
        return $this->forceTransferEvenIfParentAndChildSeparated;
    }

    /**
     * @param bool $forceTransferEvenIfParentAndChildSeparated
     * @return $this
     */
    public function setForceTransferEvenIfParentAndChildSeparated($forceTransferEvenIfParentAndChildSeparated)
    {
        $this->forceTransferEvenIfParentAndChildSeparated = $forceTransferEvenIfParentAndChildSeparated;
        return $this;
    }
}
