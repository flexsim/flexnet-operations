<?php

namespace Flexsim\FlexnetOperations\Type;

class AccountDetailDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    protected $account;

    /**
     * @var string
     */
    protected $name;

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
    protected $accountType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $customAttributes;

    /**
     * @var \DateTimeInterface
     */
    protected $dateLastModified;

    /**
     * @var \DateTimeInterface
     */
    protected $createdDate;

    /**
     * @var string
     */
    protected $createdBy;

    /**
     * @var string
     */
    protected $lastModifiedBy;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @var string $name
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @var bool $visible
     * @var string $accountType
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \DateTimeInterface $dateLastModified
     * @var \DateTimeInterface $createdDate
     * @var string $createdBy
     * @var string $lastModifiedBy
     */
    public function __construct(
        $account,
        string $name,
        string $description = null,
        \Flexsim\FlexnetOperations\Type\AddressDataType $address = null,
        bool $visible = null,
        string $accountType = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null,
        \DateTimeInterface $dateLastModified = null,
        \DateTimeInterface $createdDate = null,
        string $createdBy = null,
        string $lastModifiedBy = null
    ) {
        $this->account = $account;
        $this->name = $name;
        $this->description = $description;
        $this->address = $address;
        $this->visible = $visible;
        $this->accountType = $accountType;
        $this->customAttributes = $customAttributes;
        $this->dateLastModified = $dateLastModified;
        $this->createdDate = $createdDate;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUserZ|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @var string $name
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @var bool $visible
     * @var string $accountType
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \DateTimeInterface $dateLastModified
     * @var \DateTimeInterface $createdDate
     * @var string $createdBy
     * @var string $lastModifiedBy
     */
    public static function create(
        $account,
        string $name,
        string $description = null,
        \Flexsim\FlexnetOperations\Type\AddressDataType $address = null,
        bool $visible = null,
        string $accountType = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null,
        \DateTimeInterface $dateLastModified = null,
        \DateTimeInterface $createdDate = null,
        string $createdBy = null,
        string $lastModifiedBy = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
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

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTimeInterface $createdDate
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
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
