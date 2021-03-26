<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateOrgDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $organization;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddressDataType
     */
    private $address;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateSubOrganizationsListType
     */
    private $subOrganizations;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateRelatedOrganizationsListType
     */
    private $relatedOrganizations;

    /**
     * @var bool
     */
    private $visible;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @var string $name
     * @var string $displayName
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @var \Flexsim\FlexnetOperations\Type\UpdateSubOrganizationsListType $subOrganizations
     * @var \Flexsim\FlexnetOperations\Type\UpdateRelatedOrganizationsListType $relatedOrganizations
     * @var bool $visible
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization, string $name = null, string $displayName = null, string $description = null, \Flexsim\FlexnetOperations\Type\AddressDataType $address = null, \Flexsim\FlexnetOperations\Type\UpdateSubOrganizationsListType $subOrganizations = null, \Flexsim\FlexnetOperations\Type\UpdateRelatedOrganizationsListType $relatedOrganizations = null, bool $visible = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        $this->organization = $organization;
        $this->name = $name;
        $this->displayName = $displayName;
        $this->description = $description;
        $this->address = $address;
        $this->subOrganizations = $subOrganizations;
        $this->relatedOrganizations = $relatedOrganizations;
        $this->visible = $visible;
        $this->customAttributes = $customAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @var string $name
     * @var string $displayName
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @var \Flexsim\FlexnetOperations\Type\UpdateSubOrganizationsListType $subOrganizations
     * @var \Flexsim\FlexnetOperations\Type\UpdateRelatedOrganizationsListType $relatedOrganizations
     * @var bool $visible
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization, string $name = null, string $displayName = null, string $description = null, \Flexsim\FlexnetOperations\Type\AddressDataType $address = null, \Flexsim\FlexnetOperations\Type\UpdateSubOrganizationsListType $subOrganizations = null, \Flexsim\FlexnetOperations\Type\UpdateRelatedOrganizationsListType $relatedOrganizations = null, bool $visible = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return \Flexsim\FlexnetOperations\Type\UpdateSubOrganizationsListType
     */
    public function getSubOrganizations()
    {
        return $this->subOrganizations;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateSubOrganizationsListType $subOrganizations
     * @return $this
     */
    public function setSubOrganizations($subOrganizations)
    {
        $this->subOrganizations = $subOrganizations;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateRelatedOrganizationsListType
     */
    public function getRelatedOrganizations()
    {
        return $this->relatedOrganizations;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateRelatedOrganizationsListType $relatedOrganizations
     * @return $this
     */
    public function setRelatedOrganizations($relatedOrganizations)
    {
        $this->relatedOrganizations = $relatedOrganizations;
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
