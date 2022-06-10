<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateAcctDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    protected $account;

    /**
     * @var string
     */
    protected $id;

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
     * @var \Flexsim\FlexnetOperations\Type\UpdateSubAccountsListType
     */
    protected $subAccounts;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateRelatedAccountsListType
     */
    protected $relatedAccounts;

    /**
     * @var bool
     */
    protected $visible;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $customAttributes;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @param string $id
     * @param string $name
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @param \Flexsim\FlexnetOperations\Type\UpdateSubAccountsListType $subAccounts
     * @param \Flexsim\FlexnetOperations\Type\UpdateRelatedAccountsListType $relatedAccounts
     * @param bool $visible
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public function __construct(
        $account,
        string $id = null,
        string $name = null,
        string $description = null,
        \Flexsim\FlexnetOperations\Type\AddressDataType $address = null,
        \Flexsim\FlexnetOperations\Type\UpdateSubAccountsListType $subAccounts = null,
        \Flexsim\FlexnetOperations\Type\UpdateRelatedAccountsListType $relatedAccounts = null,
        bool $visible = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null
    ) {
        $this->account = $account;
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->address = $address;
        $this->subAccounts = $subAccounts;
        $this->relatedAccounts = $relatedAccounts;
        $this->visible = $visible;
        $this->customAttributes = $customAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @param string $id
     * @param string $name
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\AddressDataType $address
     * @param \Flexsim\FlexnetOperations\Type\UpdateSubAccountsListType $subAccounts
     * @param \Flexsim\FlexnetOperations\Type\UpdateRelatedAccountsListType $relatedAccounts
     * @param bool $visible
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public static function create(
        $account,
        string $id = null,
        string $name = null,
        string $description = null,
        \Flexsim\FlexnetOperations\Type\AddressDataType $address = null,
        \Flexsim\FlexnetOperations\Type\UpdateSubAccountsListType $subAccounts = null,
        \Flexsim\FlexnetOperations\Type\UpdateRelatedAccountsListType $relatedAccounts = null,
        bool $visible = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * @return \Flexsim\FlexnetOperations\Type\UpdateSubAccountsListType
     */
    public function getSubAccounts()
    {
        return $this->subAccounts;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateSubAccountsListType $subAccounts
     * @return $this
     */
    public function setSubAccounts($subAccounts)
    {
        $this->subAccounts = $subAccounts;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateRelatedAccountsListType
     */
    public function getRelatedAccounts()
    {
        return $this->relatedAccounts;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateRelatedAccountsListType $relatedAccounts
     * @return $this
     */
    public function setRelatedAccounts($relatedAccounts)
    {
        $this->relatedAccounts = $relatedAccounts;

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
