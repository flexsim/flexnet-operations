<?php

namespace Flexsim\FlexnetOperations\Type;

class ChannelPartnerDataType
{

    /**
     * @var string
     */
    private $tierName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $accountUnit;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $organizationUnit;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    private $contact;

    /**
     * @var bool
     */
    private $currentOwner;

    /**
     * Constructor
     *
     * @var string $tierName
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType|\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $accountUnit this method is backwards compatible so you may also pass $organizationUnit
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $contact
     * @var bool $currentOwner
     */
    public function __construct(string $tierName, $accountUnit, \Flexsim\FlexnetOperations\Type\UserIdentifierType $contact = null, bool $currentOwner = null)
    {
        $this->tierName = $tierName;
        $this->accountUnit = $accountUnit;
        $this->organizationUnit = $accountUnit;
        $this->contact = $contact;
        $this->currentOwner = $currentOwner;
    }

    /**
     * create a new instance of this class
     *
     * @var string $tierName
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType|\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $accountUnit this method is backwards compatible so you may also pass $organizationUnit
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $contact
     * @var bool $currentOwner
     */
    public static function create(string $tierName, $accountUnit, \Flexsim\FlexnetOperations\Type\UserIdentifierType $contact = null, bool $currentOwner = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getTierName()
    {
        return $this->tierName;
    }

    /**
     * @param string $tierName
     * @return $this
     */
    public function setTierName($tierName)
    {
        $this->tierName = $tierName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getAccountUnit()
    {
        return $this->accountUnit;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType $accountUnit
     * @return $this
     */
    public function setAccountUnit($accountUnit)
    {
        $this->accountUnit = $accountUnit;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getOrganizationUnit()
    {
        return $this->organizationUnit;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organizationUnit
     * @return $this
     */
    public function setOrganizationUnit($organizationUnit)
    {
        $this->organizationUnit = $organizationUnit;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCurrentOwner()
    {
        return $this->currentOwner;
    }

    /**
     * @param bool $currentOwner
     * @return $this
     */
    public function setCurrentOwner($currentOwner)
    {
        $this->currentOwner = $currentOwner;
        return $this;
    }
}
