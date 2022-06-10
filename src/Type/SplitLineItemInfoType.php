<?php

namespace Flexsim\FlexnetOperations\Type;

class SplitLineItemInfoType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $lineItemIdentifier;

    /**
     * @var int
     */
    protected $numberOfCopies;

    /**
     * @var string
     */
    protected $targetTierName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    protected $targetAccountUnit;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    protected $targetOrganizationUnit;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    protected $targetContact;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $matchingLineItemIdentifier;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @param int $numberOfCopies
     * @param string $targetTierName
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType|\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetAccountUnit this method is backwards compatible so you may also pass $targetOrganizationUnit
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $targetContact
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier
     */
    public function __construct(
        \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier,
        int $numberOfCopies,
        string $targetTierName,
        $targetAccountUnit,
        \Flexsim\FlexnetOperations\Type\UserIdentifierType $targetContact = null,
        \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier = null
    ) {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->numberOfCopies = $numberOfCopies;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
        $this->targetOrganizationUnit = $targetAccountUnit;
        $this->targetContact = $targetContact;
        $this->matchingLineItemIdentifier = $matchingLineItemIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @param int $numberOfCopies
     * @param string $targetTierName
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType|\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetAccountUnit this method is backwards compatible so you may also pass $targetOrganizationUnit
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $targetContact
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier
     */
    public static function create(
        \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier,
        int $numberOfCopies,
        string $targetTierName,
        $targetAccountUnit,
        \Flexsim\FlexnetOperations\Type\UserIdentifierType $targetContact = null,
        \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItemIdentifier()
    {
        return $this->lineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @return $this
     */
    public function setLineItemIdentifier($lineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfCopies()
    {
        return $this->numberOfCopies;
    }

    /**
     * @param int $numberOfCopies
     * @return $this
     */
    public function setNumberOfCopies($numberOfCopies)
    {
        $this->numberOfCopies = $numberOfCopies;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetTierName()
    {
        return $this->targetTierName;
    }

    /**
     * @param string $targetTierName
     * @return $this
     */
    public function setTargetTierName($targetTierName)
    {
        $this->targetTierName = $targetTierName;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getTargetAccountUnit()
    {
        return $this->targetAccountUnit;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType $targetAccountUnit
     * @return $this
     */
    public function setTargetAccountUnit($targetAccountUnit)
    {
        $this->targetAccountUnit = $targetAccountUnit;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getTargetOrganizationUnit()
    {
        return $this->targetOrganizationUnit;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetOrganizationUnit
     * @return $this
     */
    public function setTargetOrganizationUnit($targetOrganizationUnit)
    {
        $this->targetOrganizationUnit = $targetOrganizationUnit;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getTargetContact()
    {
        return $this->targetContact;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $targetContact
     * @return $this
     */
    public function setTargetContact($targetContact)
    {
        $this->targetContact = $targetContact;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getMatchingLineItemIdentifier()
    {
        return $this->matchingLineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $matchingLineItemIdentifier
     * @return $this
     */
    public function setMatchingLineItemIdentifier($matchingLineItemIdentifier)
    {
        $this->matchingLineItemIdentifier = $matchingLineItemIdentifier;

        return $this;
    }
}
