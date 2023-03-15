<?php

namespace Flexnet\LicenseService\Type;

class EntitlementLineItemIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\LicenseService\Type\EntitlementLineItemPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\LicenseService\Type\EntitlementLineItemPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, EntitlementLineItemPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\LicenseService\Type\EntitlementLineItemPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, EntitlementLineItemPKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): EntitlementLineItemIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitlementLineItemPKType|null
     */
    public function getPrimaryKeys(): EntitlementLineItemPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EntitlementLineItemPKType|null  $primaryKeys
     */
    public function withPrimaryKeys(EntitlementLineItemPKType|null $primaryKeys): EntitlementLineItemIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
