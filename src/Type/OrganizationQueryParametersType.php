<?php

namespace Flexsim\FlexnetOperations\Type;

class OrganizationQueryParametersType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $orgName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $orgDisplayName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $address1;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $address2;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $city;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $zipcode;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $country;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $region;

    /**
     * @var bool
     */
    protected $onlyRootOrgs;

    /**
     * @var string
     */
    protected $orgType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrgTypeList
     */
    protected $orgTypeList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType
     */
    protected $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    protected $lastModifiedDateTime;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $orgName
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $orgDisplayName
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $description
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $address1
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $address2
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $city
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $state
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $zipcode
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $country
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $region
     * @param  bool  $onlyRootOrgs
     * @param  string  $orgType
     * @param  \Flexsim\FlexnetOperations\Type\OrgTypeList  $orgTypeList
     * @param  \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType  $customAttributes
     * @param  \Flexsim\FlexnetOperations\Type\DateTimeQueryType  $lastModifiedDateTime
     */
    public function __construct(SimpleQueryType $orgName = null, SimpleQueryType $orgDisplayName = null, SimpleQueryType $description = null, SimpleQueryType $address1 = null, SimpleQueryType $address2 = null, SimpleQueryType $city = null, SimpleQueryType $state = null, SimpleQueryType $zipcode = null, SimpleQueryType $country = null, SimpleQueryType $region = null, bool $onlyRootOrgs = null, string $orgType = null, OrgTypeList $orgTypeList = null, OrgCustomAttributesQueryListType $customAttributes = null, DateTimeQueryType $lastModifiedDateTime = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $orgName
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $orgDisplayName
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $description
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $address1
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $address2
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $city
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $state
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $zipcode
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $country
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $region
     * @param  bool  $onlyRootOrgs
     * @param  string  $orgType
     * @param  \Flexsim\FlexnetOperations\Type\OrgTypeList  $orgTypeList
     * @param  \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType  $customAttributes
     * @param  \Flexsim\FlexnetOperations\Type\DateTimeQueryType  $lastModifiedDateTime
     */
    public static function create(SimpleQueryType $orgName = null, SimpleQueryType $orgDisplayName = null, SimpleQueryType $description = null, SimpleQueryType $address1 = null, SimpleQueryType $address2 = null, SimpleQueryType $city = null, SimpleQueryType $state = null, SimpleQueryType $zipcode = null, SimpleQueryType $country = null, SimpleQueryType $region = null, bool $onlyRootOrgs = null, string $orgType = null, OrgTypeList $orgTypeList = null, OrgCustomAttributesQueryListType $customAttributes = null, DateTimeQueryType $lastModifiedDateTime = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $orgName
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $orgDisplayName
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $description
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $address1
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $address2
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $city
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $state
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $zipcode
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $country
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $region
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
     * @param  bool  $onlyRootOrgs
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
     * @param  string  $orgType
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
     * @param  \Flexsim\FlexnetOperations\Type\OrgTypeList  $orgTypeList
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
     * @param  \Flexsim\FlexnetOperations\Type\OrgCustomAttributesQueryListType  $customAttributes
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
     * @param  \Flexsim\FlexnetOperations\Type\DateTimeQueryType  $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;

        return $this;
    }
}
