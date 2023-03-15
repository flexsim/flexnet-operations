<?php

namespace Flexnet\ProductPackagingService\Type;

class MaintenanceIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\ProductPackagingService\Type\MaintenancePKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\MaintenancePKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, MaintenancePKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\MaintenancePKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, MaintenancePKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): MaintenanceIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\MaintenancePKType|null
     */
    public function getPrimaryKeys(): MaintenancePKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenancePKType|null  $primaryKeys
     */
    public function withPrimaryKeys(MaintenancePKType|null $primaryKeys): MaintenanceIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
