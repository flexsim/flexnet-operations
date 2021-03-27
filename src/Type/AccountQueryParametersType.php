<?php

namespace Flexsim\FlexnetOperations\Type;

class AccountQueryParametersType
{

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
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $address1;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $address2;

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
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $region;

    /**
     * @var bool
     */
    private $onlyRootAccounts;

    /**
     * @var string
     */
    private $accountType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountTypeList
     */
    private $accountTypeList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AcctCustomAttributesQueryListType
     */
    private $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    private $lastModifiedDateTime;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $address1
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $address2
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $city
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $country
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $region
     * @var bool $onlyRootAccounts
     * @var string $accountType
     * @var \Flexsim\FlexnetOperations\Type\AccountTypeList $accountTypeList
     * @var \Flexsim\FlexnetOperations\Type\AcctCustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $address1 = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $address2 = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $city = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $state = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $country = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $region = null, bool $onlyRootAccounts = null, string $accountType = null, \Flexsim\FlexnetOperations\Type\AccountTypeList $accountTypeList = null, \Flexsim\FlexnetOperations\Type\AcctCustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime = null)
    {
        $this->accountID = $accountID;
        $this->accountName = $accountName;
        $this->description = $description;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
        $this->region = $region;
        $this->onlyRootAccounts = $onlyRootAccounts;
        $this->accountType = $accountType;
        $this->accountTypeList = $accountTypeList;
        $this->customAttributes = $customAttributes;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $address1
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $address2
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $city
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $country
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $region
     * @var bool $onlyRootAccounts
     * @var string $accountType
     * @var \Flexsim\FlexnetOperations\Type\AccountTypeList $accountTypeList
     * @var \Flexsim\FlexnetOperations\Type\AcctCustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $address1 = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $address2 = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $city = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $state = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $country = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $region = null, bool $onlyRootAccounts = null, string $accountType = null, \Flexsim\FlexnetOperations\Type\AccountTypeList $accountTypeList = null, \Flexsim\FlexnetOperations\Type\AcctCustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime = null)
    {
        return new self(...func_get_args());
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $address1
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $address2
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
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
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOnlyRootAccounts()
    {
        return $this->onlyRootAccounts;
    }

    /**
     * @param bool $onlyRootAccounts
     * @return $this
     */
    public function setOnlyRootAccounts($onlyRootAccounts)
    {
        $this->onlyRootAccounts = $onlyRootAccounts;
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
     * @return \Flexsim\FlexnetOperations\Type\AccountTypeList
     */
    public function getAccountTypeList()
    {
        return $this->accountTypeList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountTypeList $accountTypeList
     * @return $this
     */
    public function setAccountTypeList($accountTypeList)
    {
        $this->accountTypeList = $accountTypeList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AcctCustomAttributesQueryListType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AcctCustomAttributesQueryListType $customAttributes
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


}

