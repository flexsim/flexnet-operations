<?php

namespace Flexnet\LicenseService\Type;

class EmailContactListType
{
    /**
     * @var string|array<string>|null
     */
    private $emailId;

    /**
     * Constructor
     *
     * @param  string|array<string>|null  $emailId
     */
    public function __construct(string|array $emailId = null)
    {
        $this->emailId = $emailId;
    }

    /**
     * @param  string|array<string>|null  $emailId
     */
    public static function create(string|array $emailId = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<string>|null
     */
    public function getEmailId(): string|array|null
    {
        return $this->emailId;
    }

    /**
     * @param  string|array<string>|null  $emailId
     */
    public function withEmailId(string|array|null $emailId): EmailContactListType
    {
        $new = clone $this;
        $new->emailId = $emailId;

        return $new;
    }
}
