<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingBulkEntInfoType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $bulkEntIdentifier;

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
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier
     * @var string $targetTierName
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetOrganizationUnit
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier, string $targetTierName, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetOrganizationUnit)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
        $this->targetTierName = $targetTierName;
        $this->targetOrganizationUnit = $targetOrganizationUnit;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier
     * @var string $targetTierName
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetOrganizationUnit
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier, string $targetTierName, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetOrganizationUnit)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getBulkEntIdentifier()
    {
        return $this->bulkEntIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier
     * @return $this
     */
    public function setBulkEntIdentifier($bulkEntIdentifier)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
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

