<?php

namespace Flexnet\EntitlementOrderService\Type;

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
    public function __construct(string|array|null $emailId = null)
    {
        $this->emailId = $emailId;
    }

    /**
     * @param  string|array<string>|null  $emailId
     */
    public static function create(string|array|null $emailId = null)
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
     * @return EmailContactListType
     */
    public function withEmailId(string|array|null $emailId): EmailContactListType
    {
        $new = clone $this;
        $new->emailId = $emailId;

        return $new;
    }
}
