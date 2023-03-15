<?php

namespace Flexnet\ProductPackagingService\Type;

class MaintenanceQueryDataType
{
    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $maintenanceName;

    /**
     * @var string|null
     */
    private $version;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string
     */
    private $state;

    /**
     * @var bool|null
     */
    private $allowUpgrades;

    /**
     * @var bool|null
     */
    private $allowUpsells;

    /**
     * @var bool|null
     */
    private $allowRenewals;

    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumbersSimpleListType|null
     */
    private $partNumbers;

    /**
     * Constructor
     *
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  bool|null  $allowUpgrades
     * @param  bool|null  $allowUpsells
     * @param  bool|null  $allowRenewals
     * @param  \Flexnet\ProductPackagingService\Type\PartNumbersSimpleListType|null  $partNumbers
     */
    public function __construct(string $uniqueId, string $maintenanceName, string $state, string|null $version = null, string|null $description = null, bool|null $allowUpgrades = null, bool|null $allowUpsells = null, bool|null $allowRenewals = null, PartNumbersSimpleListType|null $partNumbers = null)
    {
        $this->uniqueId = $uniqueId;
        $this->maintenanceName = $maintenanceName;
        $this->state = $state;
        $this->version = $version;
        $this->description = $description;
        $this->allowUpgrades = $allowUpgrades;
        $this->allowUpsells = $allowUpsells;
        $this->allowRenewals = $allowRenewals;
        $this->partNumbers = $partNumbers;
    }

    /**
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  bool|null  $allowUpgrades
     * @param  bool|null  $allowUpsells
     * @param  bool|null  $allowRenewals
     * @param  \Flexnet\ProductPackagingService\Type\PartNumbersSimpleListType|null  $partNumbers
     */
    public static function create(string $uniqueId, string $maintenanceName, string $state, string|null $version = null, string|null $description = null, bool|null $allowUpgrades = null, bool|null $allowUpsells = null, bool|null $allowRenewals = null, PartNumbersSimpleListType|null $partNumbers = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getMaintenanceName(): string
    {
        return $this->maintenanceName;
    }

    public function withMaintenanceName(string $maintenanceName): MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->maintenanceName = $maintenanceName;

        return $new;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function withState(string $state): MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getAllowUpgrades(): bool|null
    {
        return $this->allowUpgrades;
    }

    public function withAllowUpgrades(bool|null $allowUpgrades): MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->allowUpgrades = $allowUpgrades;

        return $new;
    }

    public function getAllowUpsells(): bool|null
    {
        return $this->allowUpsells;
    }

    public function withAllowUpsells(bool|null $allowUpsells): MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->allowUpsells = $allowUpsells;

        return $new;
    }

    public function getAllowRenewals(): bool|null
    {
        return $this->allowRenewals;
    }

    public function withAllowRenewals(bool|null $allowRenewals): MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->allowRenewals = $allowRenewals;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumbersSimpleListType|null
     */
    public function getPartNumbers(): PartNumbersSimpleListType|null
    {
        return $this->partNumbers;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumbersSimpleListType|null  $partNumbers
     */
    public function withPartNumbers(PartNumbersSimpleListType|null $partNumbers): MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }
}
