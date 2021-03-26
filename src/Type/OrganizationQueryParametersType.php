<?php

namespace Flexsim\FlexnetOperations\Type;

class OrganizationQueryParametersType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $orgName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $orgDisplayName;

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
    private $onlyRootOrgs;

    /**
     * @var string
     */
    private $orgType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrgTypeList
     */
    private $orgTypeList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType
     */
    private $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    private $lastModifiedDateTime;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orgName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orgDisplayName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $address1
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $address2
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $city
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $country
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $region
     * @var bool $onlyRootOrgs
     * @var string $orgType
     * @var \Flexsim\FlexnetOperations\Type\OrgTypeList $orgTypeList
     * @var \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $orgName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orgDisplayName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $address1 = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $address2 = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $city = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $state = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $country = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $region = null, bool $onlyRootOrgs = null, string $orgType = null, \Flexsim\FlexnetOperations\Type\OrgTypeList $orgTypeList = null, \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime = null)
    {
        $this->orgName = $orgName;
        $this->orgDisplayName = $orgDisplayName;
        $this->description = $description;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
        $this->region = $region;
        $this->onlyRootOrgs = $onlyRootOrgs;
        $this->orgType = $orgType;
        $this->orgTypeList = $orgTypeList;
        $this->customAttributes = $customAttributes;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orgName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orgDisplayName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $address1
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $address2
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $city
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $country
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $region
     * @var bool $onlyRootOrgs
     * @var string $orgType
     * @var \Flexsim\FlexnetOperations\Type\OrgTypeList $orgTypeList
     * @var \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $orgName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orgDisplayName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $address1 = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $address2 = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $city = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $state = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $country = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $region = null, bool $onlyRootOrgs = null, string $orgType = null, \Flexsim\FlexnetOperations\Type\OrgTypeList $orgTypeList = null, \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime = null)
    {
        return new self(...func_get_args());
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
    public function getOnlyRootOrgs()
    {
        return $this->onlyRootOrgs;
    }

    /**
     * @param bool $onlyRootOrgs
     * @return $this
     */
    public function setOnlyRootOrgs($onlyRootOrgs)
    {
        $this->onlyRootOrgs = $onlyRootOrgs;
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
     * @return \Flexsim\FlexnetOperations\Type\OrgTypeList
     */
    public function getOrgTypeList()
    {
        return $this->orgTypeList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrgTypeList $orgTypeList
     * @return $this
     */
    public function setOrgTypeList($orgTypeList)
    {
        $this->orgTypeList = $orgTypeList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType $customAttributes
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

