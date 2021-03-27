<?php

namespace Flexsim\FlexnetOperations\Type;

class AccountDetailDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $account;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddressDataType
     */
    private $address;

    /**
     * @var bool
     */
    private $visible;

    /**
     * @var string
     */
    private $accountType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var \DateTimeInterface
     */
    private $dateLastModified;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @var string $name
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @var bool $visible
     * @var string $accountType
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \DateTimeInterface $dateLastModified
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account, string $name, string $description = null, \Flexsim\FlexnetOperations\Type\AddressDataType $address = null, bool $visible = null, string $accountType = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, \DateTimeInterface $dateLastModified = null)
    {
        $this->account = $account;
        $this->name = $name;
        $this->description = $description;
        $this->address = $address;
        $this->visible = $visible;
        $this->accountType = $accountType;
        $this->customAttributes = $customAttributes;
        $this->dateLastModified = $dateLastModified;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @var string $name
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @var bool $visible
     * @var string $accountType
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \DateTimeInterface $dateLastModified
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account, string $name, string $description = null, \Flexsim\FlexnetOperations\Type\AddressDataType $address = null, bool $visible = null, string $accountType = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, \DateTimeInterface $dateLastModified = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;
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

