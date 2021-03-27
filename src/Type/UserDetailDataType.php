<?php

namespace Flexsim\FlexnetOperations\Type;

class UserDetailDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    private $userIdentifier;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var bool
     */
    private $optIn;

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
     * @var string
     */
    private $domain;

    /**
     * @var \DateTimeInterface
     */
    private $dateCreated;

    /**
     * @var \DateTimeInterface
     */
    private $dateLastModified;

    /**
     * @var \DateTimeInterface
     */
    private $dateLastLogin;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserAccountsListType
     */
    private $accountRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserOrganizationsListType
     */
    private $orgRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var \DateTimeInterface
     */
    private $expiryDate;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @var string
     */
    private $lastModifiedBy;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier
     * @var string $displayName
     * @var bool $optIn
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
     * @var string $domain
     * @var \DateTimeInterface $dateCreated
     * @var \DateTimeInterface $dateLastModified
     * @var \DateTimeInterface $dateLastLogin
     * @var \Flexsim\FlexnetOperations\Type\UserAccountsListType|\Flexsim\FlexnetOperations\Type\UserOrganizationsListType $orgRolesList $accountRolesList this method is backwards compatible so you may also pass $orgRolesList
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \DateTimeInterface $expiryDate
     * @var string $createdBy
     * @var string $lastModifiedBy
     */
    public function __construct(
        \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier,
        string $displayName = null,
        bool $optIn = null,
        string $faxNumber = null,
        string $street = null,
        string $city = null,
        string $state = null,
        string $zipcode = null,
        string $country = null,
        string $status = null,
        string $locale = null,
        string $timezone = null,
        bool $shared = null,
        string $domain = null,
        \DateTimeInterface $dateCreated = null,
        \DateTimeInterface $dateLastModified = null,
        \DateTimeInterface $dateLastLogin = null,
        $accountRolesList = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null,
        \DateTimeInterface $expiryDate = null,
        string $createdBy = null,
        string $lastModifiedBy = null
    ) {
        $this->userIdentifier = $userIdentifier;
        $this->displayName = $displayName;
        $this->optIn = $optIn;
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
        $this->domain = $domain;
        $this->dateCreated = $dateCreated;
        $this->dateLastModified = $dateLastModified;
        $this->dateLastLogin = $dateLastLogin;
        $this->accountRolesList = $accountRolesList;
        $this->orgRolesList = $accountRolesList;
        $this->customAttributes = $customAttributes;
        $this->expiryDate = $expiryDate;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier
     * @var string $displayName
     * @var bool $optIn
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
     * @var string $domain
     * @var \DateTimeInterface $dateCreated
     * @var \DateTimeInterface $dateLastModified
     * @var \DateTimeInterface $dateLastLogin
     * @var \Flexsim\FlexnetOperations\Type\UserAccountsListType|\Flexsim\FlexnetOperations\Type\UserOrganizationsListType $orgRolesList $accountRolesList this method is backwards compatible so you may also pass $orgRolesList
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \DateTimeInterface $expiryDate
     * @var string $createdBy
     * @var string $lastModifiedBy
     */
    public static function create(
        \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier,
        string $displayName = null,
        bool $optIn = null,
        string $faxNumber = null,
        string $street = null,
        string $city = null,
        string $state = null,
        string $zipcode = null,
        string $country = null,
        string $status = null,
        string $locale = null,
        string $timezone = null,
        bool $shared = null,
        string $domain = null,
        \DateTimeInterface $dateCreated = null,
        \DateTimeInterface $dateLastModified = null,
        \DateTimeInterface $dateLastLogin = null,
        $accountRolesList = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null,
        \DateTimeInterface $expiryDate = null,
        string $createdBy = null,
        string $lastModifiedBy = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUserIdentifier()
    {
        return $this->userIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier
     * @return $this
     */
    public function setUserIdentifier($userIdentifier)
    {
        $this->userIdentifier = $userIdentifier;
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
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param \DateTimeInterface $dateCreated
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateLastModified()
    {
        return $this->dateLastModified;
    }

    /**
     * @param \DateTimeInterface $dateLastModified
     * @return $this
     */
    public function setDateLastModified($dateLastModified)
    {
        $this->dateLastModified = $dateLastModified;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateLastLogin()
    {
        return $this->dateLastLogin;
    }

    /**
     * @param \DateTimeInterface $dateLastLogin
     * @return $this
     */
    public function setDateLastLogin($dateLastLogin)
    {
        $this->dateLastLogin = $dateLastLogin;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserAccountsListType
     */
    public function getAccountRolesList()
    {
        return $this->accountRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserAccountsListType $accountRolesList
     * @return $this
     */
    public function setAccountRolesList($accountRolesList)
    {
        $this->accountRolesList = $accountRolesList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserOrganizationsListType
     */
    public function getOrgRolesList()
    {
        return $this->orgRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserOrganizationsListType $orgRolesList
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

    /**
     * @return \DateTimeInterface
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param \DateTimeInterface $expiryDate
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * @param string $lastModifiedBy
     * @return $this
     */
    public function setLastModifiedBy($lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }
}
