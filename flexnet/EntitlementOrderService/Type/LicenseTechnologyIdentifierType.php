<?php

namespace Flexnet\EntitlementOrderService\Type;

class LicenseTechnologyIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseTechnologyPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, LicenseTechnologyPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, LicenseTechnologyPKType|null $primaryKeys = null)
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
     * @return LicenseTechnologyIdentifierType
     */
    public function withUniqueId(string|null $uniqueId): LicenseTechnologyIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseTechnologyPKType|null
     */
    public function getPrimaryKeys(): LicenseTechnologyPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyPKType|null  $primaryKeys
     * @return LicenseTechnologyIdentifierType
     */
    public function withPrimaryKeys(LicenseTechnologyPKType|null $primaryKeys): LicenseTechnologyIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
