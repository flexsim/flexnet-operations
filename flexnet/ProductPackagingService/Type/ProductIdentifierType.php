<?php

namespace Flexnet\ProductPackagingService\Type;

class ProductIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     */
    public function __construct(?string $uniqueId = null, ?\Flexnet\ProductPackagingService\Type\ProductPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    public static function create(?string $uniqueId = null, ?\Flexnet\ProductPackagingService\Type\ProductPKType $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): \Flexnet\ProductPackagingService\Type\ProductIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getPrimaryKeys(): ?\Flexnet\ProductPackagingService\Type\ProductPKType
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(?\Flexnet\ProductPackagingService\Type\ProductPKType $primaryKeys): \Flexnet\ProductPackagingService\Type\ProductIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
