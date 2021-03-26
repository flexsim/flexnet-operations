<?php

namespace Flexsim\FlexnetOperations\Type;

class UserPKType
{

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * Constructor
     *
     * @var string $firstName
     * @var string $lastName
     * @var string $emailAddress
     * @var string $phoneNumber
     */
    public function __construct(string $firstName, string $lastName, string $emailAddress, string $phoneNumber = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * create a new instance of this class
     *
     * @var string $firstName
     * @var string $lastName
     * @var string $emailAddress
     * @var string $phoneNumber
     */
    public static function create(string $firstName, string $lastName, string $emailAddress, string $phoneNumber = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


}

