<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateDomainUserDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType
     */
    protected $domainUser;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $organization;

    /**
     * @var string
     */
    protected $roles;

    /**
     * @var bool
     */
    protected $optIn;

    /**
     * @var string
     */
    protected $locale;

    /**
     * @var string
     */
    protected $timeZone;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $customAttributes;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType $domainUser
     * @param string $email
     * @param string $organization
     * @param string|array $roles
     * @param bool $optIn
     * @param string $locale
     * @param string $timeZone
     * @param string $status
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DomainUserIdentifierType $domainUser, string $email = null, string $organization = null, $roles = null, bool $optIn = null, string $locale = null, string $timeZone = null, string $status = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        $this->domainUser = $domainUser;
        $this->email = $email;
        $this->organization = $organization;
        $this->roles = $roles;
        $this->optIn = $optIn;
        $this->locale = $locale;
        $this->timeZone = $timeZone;
        $this->status = $status;
        $this->customAttributes = $customAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType $domainUser
     * @param string $email
     * @param string $organization
     * @param string|array $roles
     * @param bool $optIn
     * @param string $locale
     * @param string $timeZone
     * @param string $status
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DomainUserIdentifierType $domainUser, string $email = null, string $organization = null, $roles = null, bool $optIn = null, string $locale = null, string $timeZone = null, string $status = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType
     */
    public function getDomainUser()
    {
        return $this->domainUser;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType $domainUser
     * @return $this
     */
    public function setDomainUser($domainUser)
    {
        $this->domainUser = $domainUser;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param string $organization
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
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param string $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

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
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

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
