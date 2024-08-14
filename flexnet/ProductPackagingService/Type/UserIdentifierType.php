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
     */
    public function __construct(?string $uniqueId = null, ?string $userName = null, ?\Flexnet\ProductPackagingService\Type\UserPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->userName = $userName;
        $this->primaryKeys = $primaryKeys;
    }

    public static function create(?string $uniqueId = null, ?string $userName = null, ?\Flexnet\ProductPackagingService\Type\UserPKType $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): \Flexnet\ProductPackagingService\Type\UserIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function withUserName(?string $userName): \Flexnet\ProductPackagingService\Type\UserIdentifierType
    {
        $new = clone $this;
        $new->userName = $userName;

        return $new;
    }

    public function getPrimaryKeys(): ?\Flexnet\ProductPackagingService\Type\UserPKType
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(?\Flexnet\ProductPackagingService\Type\UserPKType $primaryKeys): \Flexnet\ProductPackagingService\Type\UserIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
