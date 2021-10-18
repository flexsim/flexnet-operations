<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingBulkEntInfoType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $bulkEntIdentifier;

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
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier
     * @var string $targetTierName
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType|\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetAccountUnit this method is backwards compatible so you may also pass $targetOrganizationUnit
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier, string $targetTierName, $targetAccountUnit)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
        $this->targetTierName = $targetTierName;
        $this->targetAccountUnit = $targetAccountUnit;
        $this->targetOrganizationUnit = $targetAccountUnit;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier
     * @var string $targetTierName
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType|\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $targetAccountUnit this method is backwards compatible so you may also pass $targetOrganizationUnit
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier, string $targetTierName, $targetAccountUnit)
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
