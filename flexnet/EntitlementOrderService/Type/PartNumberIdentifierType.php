<?php

namespace Flexnet\EntitlementOrderService\Type;

class PartNumberIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PartNumberPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, PartNumberPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, PartNumberPKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|null
     */
    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    /**
     * @param  string|null  $uniqueId
     * @return PartNumberIdentifierType
     */
    public function withUniqueId(string|null $uniqueId): PartNumberIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\PartNumberPKType|null
     */
    public function getPrimaryKeys(): PartNumberPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberPKType|null  $primaryKeys
     * @return PartNumberIdentifierType
     */
    public function withPrimaryKeys(PartNumberPKType|null $primaryKeys): PartNumberIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
