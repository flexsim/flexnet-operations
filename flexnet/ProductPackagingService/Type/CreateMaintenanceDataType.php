<?php

namespace Flexnet\ProductPackagingService\Type;

class CreateMaintenanceDataType
{
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
    public function __construct(string $maintenanceName, string|null $version = null, string|null $description = null, bool|null $allowUpgrades = null, bool|null $allowUpsells = null, bool|null $allowRenewals = null, PartNumbersSimpleListType|null $partNumbers = null)
    {
        $this->maintenanceName = $maintenanceName;
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
    public static function create(string $maintenanceName, string|null $version = null, string|null $description = null, bool|null $allowUpgrades = null, bool|null $allowUpsells = null, bool|null $allowRenewals = null, PartNumbersSimpleListType|null $partNumbers = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceName(): string
    {
        return $this->maintenanceName;
    }

    public function withMaintenanceName(string $maintenanceName): CreateMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenanceName = $maintenanceName;

        return $new;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): CreateMaintenanceDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): CreateMaintenanceDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getAllowUpgrades(): bool|null
    {
        return $this->allowUpgrades;
    }

    public function withAllowUpgrades(bool|null $allowUpgrades): CreateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowUpgrades = $allowUpgrades;

        return $new;
    }

    public function getAllowUpsells(): bool|null
    {
        return $this->allowUpsells;
    }

    public function withAllowUpsells(bool|null $allowUpsells): CreateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowUpsells = $allowUpsells;

        return $new;
    }

    public function getAllowRenewals(): bool|null
    {
        return $this->allowRenewals;
    }

    public function withAllowRenewals(bool|null $allowRenewals): CreateMaintenanceDataType
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
    public function withPartNumbers(PartNumbersSimpleListType|null $partNumbers): CreateMaintenanceDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }
}
