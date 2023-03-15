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
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\ProductPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, ProductPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\ProductPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, ProductPKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): ProductIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductPKType|null
     */
    public function getPrimaryKeys(): ProductPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductPKType|null  $primaryKeys
     */
    public function withPrimaryKeys(ProductPKType|null $primaryKeys): ProductIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
