<?php

namespace Flexsim\FlexnetOperations\Type;

class OrganizationDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $name;

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
     * Constructor
     *
     * @param string $name
     * @param string $displayName
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @param bool $visible
     * @param string $orgType
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public function __construct(string $name, string $displayName, string $description = null, \Flexsim\FlexnetOperations\Type\AddressDataType $address = null, bool $visible = null, string $orgType = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        $this->name = $name;
        $this->displayName = $displayName;
        $this->description = $description;
        $this->address = $address;
        $this->visible = $visible;
        $this->orgType = $orgType;
        $this->customAttributes = $customAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param string $name
     * @param string $displayName
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @param bool $visible
     * @param string $orgType
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public static function create(string $name, string $displayName, string $description = null, \Flexsim\FlexnetOperations\Type\AddressDataType $address = null, bool $visible = null, string $orgType = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        return new self(...func_get_args());
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
}
