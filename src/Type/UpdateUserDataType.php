<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    private $user;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var bool
     */
    private $optIn;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $faxNumber;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zipcode;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var bool
     */
    private $shared;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountsListType
     */
    private $acctRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationsListType
     */
    private $orgRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var string $firstName
     * @var string $lastName
     * @var string $displayName
     * @var string $emailAddress
     * @var bool $optIn
     * @var string $phoneNumber
     * @var string $faxNumber
     * @var string $street
     * @var string $city
     * @var string $state
     * @var string $zipcode
     * @var string $country
     * @var string $status
     * @var string $locale
     * @var string $timezone
     * @var bool $shared
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountsListType|\Flexsim\FlexnetOperations\Type\UpdateUserOrganizationsListType $acctRolesList this method is backwards compatible so you can also pass $orgRolesList
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, string $firstName = null, string $lastName = null, string $displayName = null, string $emailAddress = null, bool $optIn = null, string $phoneNumber = null, string $faxNumber = null, string $street = null, string $city = null, string $state = null, string $zipcode = null, string $country = null, string $status = null, string $locale = null, string $timezone = null, bool $shared = null, $acctRolesList = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        $this->user = $user;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->displayName = $displayName;
        $this->emailAddress = $emailAddress;
        $this->optIn = $optIn;
        $this->phoneNumber = $phoneNumber;
        $this->faxNumber = $faxNumber;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
        $this->status = $status;
        $this->locale = $locale;
        $this->timezone = $timezone;
        $this->shared = $shared;
        $this->acctRolesList = $acctRolesList;
        $this->orgRolesList = $acctRolesList;
        $this->customAttributes = $customAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var string $firstName
     * @var string $lastName
     * @var string $displayName
     * @var string $emailAddress
     * @var bool $optIn
     * @var string $phoneNumber
     * @var string $faxNumber
     * @var string $street
     * @var string $city
     * @var string $state
     * @var string $zipcode
     * @var string $country
     * @var string $status
     * @var string $locale
     * @var string $timezone
     * @var bool $shared
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountsListType|\Flexsim\FlexnetOperations\Type\UpdateUserOrganizationsListType $acctRolesList this method is backwards compatible so you can also pass $orgRolesList
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, string $firstName = null, string $lastName = null, string $displayName = null, string $emailAddress = null, bool $optIn = null, string $phoneNumber = null, string $faxNumber = null, string $street = null, string $city = null, string $state = null, string $zipcode = null, string $country = null, string $status = null, string $locale = null, string $timezone = null, bool $shared = null, $acctRolesList = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOptIn()
    {
        return $this->optIn;
    }

    /**
     * @param bool $optIn
     * @return $this
     */
    public function setOptIn($optIn)
    {
        $this->optIn = $optIn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @param bool $shared
     * @return $this
     */
    public function setShared($shared)
    {
        $this->shared = $shared;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserAccountsListType
     */
    public function getAcctRolesList()
    {
        return $this->acctRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserAccountsListType $acctRolesList
     * @return $this
     */
    public function setAcctRolesList($acctRolesList)
    {
        $this->acctRolesList = $acctRolesList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationsListType
     */
    public function getOrgRolesList()
    {
        return $this->orgRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationsListType $orgRolesList
     * @return $this
     */
    public function setOrgRolesList($orgRolesList)
    {
        $this->orgRolesList = $orgRolesList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
}
