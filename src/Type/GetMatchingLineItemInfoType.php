<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingLineItemInfoType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $lineItemIdentifier;

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
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @param string $targetTierName
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType|\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetAccountUnit this method is backwards compatible so you may also pass $targetOrganizationUnit
     */
    public function __construct(
        \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier,
        string $targetTierName,
        $targetAccountUnit
    ) {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
        $this->targetOrganizationUnit = $targetAccountUnit;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @param string $targetTierName
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType|\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetAccountUnit this method is backwards compatible so you may also pass $targetOrganizationUnit
     */
    public static function create(
        \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier,
        string $targetTierName,
        $targetAccountUnit
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
}
