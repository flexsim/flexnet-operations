<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingLineItemInfoType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var string
     */
    private $targetTierName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $targetOrganizationUnit;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @var string $targetTierName
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetOrganizationUnit
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, string $targetTierName, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetOrganizationUnit)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->targetTierName = $targetTierName;
        $this->targetOrganizationUnit = $targetOrganizationUnit;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @var string $targetTierName
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetOrganizationUnit
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, string $targetTierName, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetOrganizationUnit)
    {
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

