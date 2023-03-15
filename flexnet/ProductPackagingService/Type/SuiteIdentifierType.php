<?php

namespace Flexnet\ProductPackagingService\Type;

class SuiteIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SuitePKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\SuitePKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, SuitePKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\SuitePKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, SuitePKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): SuiteIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SuitePKType|null
     */
    public function getPrimaryKeys(): SuitePKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuitePKType|null  $primaryKeys
     */
    public function withPrimaryKeys(SuitePKType|null $primaryKeys): SuiteIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
