<?php

namespace Flexsim\FlexnetOperations\Type;

class OrganizationDetailDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    protected $organization;

    /**
     * @var string
     */
    protected $displayName;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddressDataType
     */
    protected $address;

    /**
     * @var bool
     */
    protected $visible;

    /**
     * @var string
     */
    protected $orgType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $customAttributes;

    /**
     * @var \DateTimeInterface
     */
    protected $dateLastModified;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @param string $displayName
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @param bool $visible
     * @param string $orgType
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @param \DateTimeInterface $dateLastModified
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization, string $displayName, string $description = null, \Flexsim\FlexnetOperations\Type\AddressDataType $address = null, bool $visible = null, string $orgType = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, \DateTimeInterface $dateLastModified = null)
    {
        $this->organization = $organization;
        $this->displayName = $displayName;
        $this->description = $description;
        $this->address = $address;
        $this->visible = $visible;
        $this->orgType = $orgType;
        $this->customAttributes = $customAttributes;
        $this->dateLastModified = $dateLastModified;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @param string $displayName
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @param bool $visible
     * @param string $orgType
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @param \DateTimeInterface $dateLastModified
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization, string $displayName, string $description = null, \Flexsim\FlexnetOperations\Type\AddressDataType $address = null, bool $visible = null, string $orgType = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, \DateTimeInterface $dateLastModified = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddressDataType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
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
}
