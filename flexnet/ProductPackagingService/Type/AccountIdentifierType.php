<?php

namespace Flexnet\ProductPackagingService\Type;

class AccountIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\ProductPackagingService\Type\AccountPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     */
    public function __construct(?string $uniqueId = null, ?\Flexnet\ProductPackagingService\Type\AccountPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    public static function create(?string $uniqueId = null, ?\Flexnet\ProductPackagingService\Type\AccountPKType $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): \Flexnet\ProductPackagingService\Type\AccountIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getPrimaryKeys(): ?\Flexnet\ProductPackagingService\Type\AccountPKType
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(?\Flexnet\ProductPackagingService\Type\AccountPKType $primaryKeys): \Flexnet\ProductPackagingService\Type\AccountIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
