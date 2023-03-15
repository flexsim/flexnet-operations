<?php

namespace Flexnet\EntitlementOrderService\Type;

class AccountIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AccountPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\EntitlementOrderService\Type\AccountPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, AccountPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\EntitlementOrderService\Type\AccountPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, AccountPKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): AccountIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AccountPKType|null
     */
    public function getPrimaryKeys(): AccountPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AccountPKType|null  $primaryKeys
     */
    public function withPrimaryKeys(AccountPKType|null $primaryKeys): AccountIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
