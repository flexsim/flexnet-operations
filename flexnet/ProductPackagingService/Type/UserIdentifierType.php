<?php

namespace Flexnet\ProductPackagingService\Type;

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
     * @var \Flexnet\ProductPackagingService\Type\UserPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  string|null  $userName
     * @param  \Flexnet\ProductPackagingService\Type\UserPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, string|null $userName = null, UserPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->userName = $userName;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  string|null  $userName
     * @param  \Flexnet\ProductPackagingService\Type\UserPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, string|null $userName = null, UserPKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): UserIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getUserName(): string|null
    {
        return $this->userName;
    }

    public function withUserName(string|null $userName): UserIdentifierType
    {
        $new = clone $this;
        $new->userName = $userName;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UserPKType|null
     */
    public function getPrimaryKeys(): UserPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UserPKType|null  $primaryKeys
     */
    public function withPrimaryKeys(UserPKType|null $primaryKeys): UserIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
