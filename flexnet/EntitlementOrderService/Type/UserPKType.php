<?php

namespace Flexnet\EntitlementOrderService\Type;

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
     * @var string|null
     */
    private $phoneNumber;

    /**
     * Constructor
     *
     * @param  string  $firstName
     * @param  string  $lastName
     * @param  string  $emailAddress
     * @param  string|null  $phoneNumber
     */
    public function __construct(string $firstName, string $lastName, string $emailAddress, string|null $phoneNumber = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @param  string  $firstName
     * @param  string  $lastName
     * @param  string  $emailAddress
     * @param  string|null  $phoneNumber
     */
    public static function create(string $firstName, string $lastName, string $emailAddress, string|null $phoneNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function withFirstName(string $firstName): UserPKType
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function withLastName(string $lastName): UserPKType
    {
        $new = clone $this;
        $new->lastName = $lastName;

        return $new;
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function withEmailAddress(string $emailAddress): UserPKType
    {
        $new = clone $this;
        $new->emailAddress = $emailAddress;

        return $new;
    }

    public function getPhoneNumber(): string|null
    {
        return $this->phoneNumber;
    }

    public function withPhoneNumber(string|null $phoneNumber): UserPKType
    {
        $new = clone $this;
        $new->phoneNumber = $phoneNumber;

        return $new;
    }
}
