<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateUserDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $displayName;

    /**
     * @var string
     */
    protected $emailAddress;

    /**
     * @var bool
     */
    protected $optIn;

    /**
     * @var string
     */
    protected $phoneNumber;

    /**
     * @var string
     */
    protected $faxNumber;

    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $zipcode;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $locale;

    /**
     * @var bool
     */
    protected $canLogin;

    /**
     * @var string
     */
    protected $userName;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $timezone;

    /**
     * @var bool
     */
    protected $shared;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserAccountsListType
     */
    protected $acctRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserOrganizationsListType
     */
    protected $orgRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $customAttributes;

    /**
     * Constructor
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $displayName
     * @param string $emailAddress
     * @param bool $optIn
     * @param string $phoneNumber
     * @param string $faxNumber
     * @param string $street
     * @param string $city
     * @param string $state
     * @param string $zipcode
     * @param string $country
     * @param string $locale
     * @param bool $canLogin
     * @param string $userName
     * @param string $status
     * @param string $timezone
     * @param bool $shared
     * @param \Flexsim\FlexnetOperations\Type\CreateUserAccountsListType|\Flexsim\FlexnetOperations\Type\CreateUserOrganizationsListType $acctRolesList this method is backwards compatible so you may also pass $orgRolesList
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public function __construct(string $firstName, string $lastName, string $displayName = null, string $emailAddress, bool $optIn = null, string $phoneNumber = null, string $faxNumber = null, string $street = null, string $city = null, string $state = null, string $zipcode = null, string $country = null, string $locale = null, bool $canLogin, string $userName = null, string $status = null, string $timezone = null, bool $shared = null, $acctRolesList, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
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
        $this->locale = $locale;
        $this->canLogin = $canLogin;
        $this->userName = $userName;
        $this->status = $status;
        $this->timezone = $timezone;
        $this->shared = $shared;
        $this->acctRolesList = $acctRolesList;
        $this->orgRolesList = $acctRolesList;
        $this->customAttributes = $customAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $displayName
     * @param string $emailAddress
     * @param bool $optIn
     * @param string $phoneNumber
     * @param string $faxNumber
     * @param string $street
     * @param string $city
     * @param string $state
     * @param string $zipcode
     * @param string $country
     * @param string $locale
     * @param bool $canLogin
     * @param string $userName
     * @param string $status
     * @param string $timezone
     * @param bool $shared
     * @param \Flexsim\FlexnetOperations\Type\CreateUserAccountsListType|\Flexsim\FlexnetOperations\Type\CreateUserOrganizationsListType $acctRolesList this method is backwards compatible so you may also pass $orgRolesList
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public static function create(string $firstName, string $lastName, string $displayName = null, string $emailAddress, bool $optIn = null, string $phoneNumber = null, string $faxNumber = null, string $street = null, string $city = null, string $state = null, string $zipcode = null, string $country = null, string $locale = null, bool $canLogin, string $userName = null, string $status = null, string $timezone = null, bool $shared = null, $acctRolesList, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        return new self(...func_get_args());
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
     * @return bool
     */
    public function getCanLogin()
    {
        return $this->canLogin;
    }

    /**
     * @param bool $canLogin
     * @return $this
     */
    public function setCanLogin($canLogin)
    {
        $this->canLogin = $canLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
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
     * @return \Flexsim\FlexnetOperations\Type\CreateUserAccountsListType
     */
    public function getAcctRolesList()
    {
        return $this->acctRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateUserAccountsListType $acctRolesList
     * @return $this
     */
    public function setAcctRolesList($acctRolesList)
    {
        $this->acctRolesList = $acctRolesList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUserOrganizationsListType
     */
    public function getOrgRolesList()
    {
        return $this->orgRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateUserOrganizationsListType $orgRolesList
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
