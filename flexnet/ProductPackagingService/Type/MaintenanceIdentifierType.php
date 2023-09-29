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
     */
    public function __construct(string $uniqueId = null, MaintenancePKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    public static function create(string $uniqueId = null, MaintenancePKType $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): MaintenanceIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getPrimaryKeys(): ?MaintenancePKType
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(?MaintenancePKType $primaryKeys): MaintenanceIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
