<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferEntitlementInfoType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $entitlementIdentifier;

    /**
     * @var string
     */
    protected $accountTo;

    /**
     * @var string
     */
    protected $organizationTo;

    /**
     * @var bool
     */
    protected $retainExistingIds;

    /**
     * @var bool
     */
    protected $returnActiveFulfillments;

    /**
     * @var bool
     */
    protected $forceTransferEvenIfNoTargetUsers;

    /**
     * @var bool
     */
    protected $forceTransferEvenIfParentAndChildSeparated;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @param string $accountTo this method is backwards compatible so your may also pass $organizationTo
     * @param bool $retainExistingIds
     * @param bool $returnActiveFulfillments
     * @param bool $forceTransferEvenIfNoTargetUsers
     * @param bool $forceTransferEvenIfParentAndChildSeparated
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
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @param string $accountTo this method is backwards compatible so your may also pass $organizationTo
     * @param bool $retainExistingIds
     * @param bool $returnActiveFulfillments
     * @param bool $forceTransferEvenIfNoTargetUsers
     * @param bool $forceTransferEvenIfParentAndChildSeparated
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
