<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, EntitlementPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, EntitlementPKType|null $primaryKeys = null)
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
     * @return EntitlementIdentifierType
     */
    public function withUniqueId(string|null $uniqueId): EntitlementIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementPKType|null
     */
    public function getPrimaryKeys(): EntitlementPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementPKType|null  $primaryKeys
     * @return EntitlementIdentifierType
     */
    public function withPrimaryKeys(EntitlementPKType|null $primaryKeys): EntitlementIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
