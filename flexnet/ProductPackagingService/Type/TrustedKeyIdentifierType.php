<?php

namespace Flexnet\ProductPackagingService\Type;

class TrustedKeyIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\ProductPackagingService\Type\TrustedKeyPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, TrustedKeyPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, TrustedKeyPKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): TrustedKeyIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\TrustedKeyPKType|null
     */
    public function getPrimaryKeys(): TrustedKeyPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyPKType|null  $primaryKeys
     */
    public function withPrimaryKeys(TrustedKeyPKType|null $primaryKeys): TrustedKeyIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
