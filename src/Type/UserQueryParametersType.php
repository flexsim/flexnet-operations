<?php

namespace Flexsim\FlexnetOperations\Type;

class UserQueryParametersType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $userName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $firstName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $lastName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $displayName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $emailAddress;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $phoneNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $faxNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $street;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $city;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $zipcode;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $country;

    /**
     * @var bool
     */
    private $isActive;

    /**
     * @var bool
     */
    private $canLogIn;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $accountID;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $accountName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $orgName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $orgDisplayName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType
     */
    private $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    private $lastModifiedDateTime;

    /**
     * @var string
     */
    private $accountType;

    /**
     * @var string
     */
    private $orgType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserAccountRolesListType
     */
    private $roles;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $userName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $firstName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $lastName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $displayName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailAddress
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $phoneNumber
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $faxNumber
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $street
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $city
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $country
     * @var bool $isActive
     * @var bool $canLogIn
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID this method is backwards compatible so you may also pass $orgName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName this method is backwards compatible so you may also pass $orgDisplayName
     * @var \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     * @var string $accountType this method is backwards compatible so you may also pass $orgType
     * @var \Flexsim\FlexnetOperations\Type\UserAccountRolesListType $roles
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $userName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $firstName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $lastName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $displayName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailAddress = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $phoneNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $faxNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $street = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $city = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $state = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $country = null, bool $isActive = null, bool $canLogIn = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName = null, \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime = null, string $accountType = null, \Flexsim\FlexnetOperations\Type\UserAccountRolesListType $roles = null)
    {
        $this->userName = $userName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->displayName = $displayName;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
        $this->faxNumber = $faxNumber;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
        $this->isActive = $isActive;
        $this->canLogIn = $canLogIn;
        $this->accountID = $accountID;
        $this->orgName = $accountID;
        $this->accountName = $accountName;
        $this->orgDisplayName = $accountName;
        $this->customAttributes = $customAttributes;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->accountType = $accountType;
        $this->orgType = $accountType;
        $this->roles = $roles;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $userName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $firstName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $lastName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $displayName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailAddress
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $phoneNumber
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $faxNumber
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $street
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $city
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $country
     * @var bool $isActive
     * @var bool $canLogIn
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID this method is backwards compatible so you may also pass $orgName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName this method is backwards compatible so you may also pass $orgDisplayName
     * @var \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     * @var string $accountType this method is backwards compatible so you may also pass $orgType
     * @var \Flexsim\FlexnetOperations\Type\UserAccountRolesListType $roles
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $userName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $firstName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $lastName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $displayName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailAddress = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $phoneNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $faxNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $street = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $city = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $state = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $country = null, bool $isActive = null, bool $canLogIn = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName = null, \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime = null, string $accountType = null, \Flexsim\FlexnetOperations\Type\UserAccountRolesListType $roles = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCanLogIn()
    {
        return $this->canLogIn;
    }

    /**
     * @param bool $canLogIn
     * @return $this
     */
    public function setCanLogIn($canLogIn)
    {
        $this->canLogIn = $canLogIn;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID
     * @return $this
     */
    public function setAccountID($accountID)
    {
        $this->accountID = $accountID;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $orgName
     * @return $this
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getOrgDisplayName()
    {
        return $this->orgDisplayName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $orgDisplayName
     * @return $this
     */
    public function setOrgDisplayName($orgDisplayName)
    {
        $this->orgDisplayName = $orgDisplayName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgType()
    {
        return $this->orgType;
    }

    /**
     * @param string $orgType
     * @return $this
     */
    public function setOrgType($orgType)
    {
        $this->orgType = $orgType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserAccountRolesListType
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserAccountRolesListType $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }
}
