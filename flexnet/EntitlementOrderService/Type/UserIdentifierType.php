<?php

namespace Flexnet\EntitlementOrderService\Type;

class UserIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var string|null
     */
    private $userName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\UserPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     */
    public function __construct(string $uniqueId = null, string $userName = null, UserPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->userName = $userName;
        $this->primaryKeys = $primaryKeys;
    }

    public static function create(string $uniqueId = null, string $userName = null, UserPKType $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): UserIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function withUserName(?string $userName): UserIdentifierType
    {
        $new = clone $this;
        $new->userName = $userName;

        return $new;
    }

    public function getPrimaryKeys(): ?UserPKType
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(?UserPKType $primaryKeys): UserIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
