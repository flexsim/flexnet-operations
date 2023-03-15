<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateMaintenanceDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType
     */
    private $maintenanceIdentifier;

    /**
     * @var string|null
     */
    private $name;

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
     * @var \Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType|null
     */
    private $partNumbers;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     * @param  string|null  $name
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  bool|null  $allowUpgrades
     * @param  bool|null  $allowUpsells
     * @param  bool|null  $allowRenewals
     * @param  \Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType|null  $partNumbers
     */
    public function __construct(MaintenanceIdentifierType $maintenanceIdentifier, string|null $name = null, string|null $version = null, string|null $description = null, bool|null $allowUpgrades = null, bool|null $allowUpsells = null, bool|null $allowRenewals = null, UpdatePartNumbersSimpleListType|null $partNumbers = null)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        $this->name = $name;
        $this->version = $version;
        $this->description = $description;
        $this->allowUpgrades = $allowUpgrades;
        $this->allowUpsells = $allowUpsells;
        $this->allowRenewals = $allowRenewals;
        $this->partNumbers = $partNumbers;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     * @param  string|null  $name
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  bool|null  $allowUpgrades
     * @param  bool|null  $allowUpsells
     * @param  bool|null  $allowRenewals
     * @param  \Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType|null  $partNumbers
     */
    public static function create(MaintenanceIdentifierType $maintenanceIdentifier, string|null $name = null, string|null $version = null, string|null $description = null, bool|null $allowUpgrades = null, bool|null $allowUpsells = null, bool|null $allowRenewals = null, UpdatePartNumbersSimpleListType|null $partNumbers = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType
     */
    public function getMaintenanceIdentifier(): MaintenanceIdentifierType
    {
        return $this->maintenanceIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     */
    public function withMaintenanceIdentifier(MaintenanceIdentifierType $maintenanceIdentifier): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }

    public function getName(): string|null
    {
        return $this->name;
    }

    public function withName(string|null $name): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getAllowUpgrades(): bool|null
    {
        return $this->allowUpgrades;
    }

    public function withAllowUpgrades(bool|null $allowUpgrades): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowUpgrades = $allowUpgrades;

        return $new;
    }

    public function getAllowUpsells(): bool|null
    {
        return $this->allowUpsells;
    }

    public function withAllowUpsells(bool|null $allowUpsells): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowUpsells = $allowUpsells;

        return $new;
    }

    public function getAllowRenewals(): bool|null
    {
        return $this->allowRenewals;
    }

    public function withAllowRenewals(bool|null $allowRenewals): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowRenewals = $allowRenewals;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType|null
     */
    public function getPartNumbers(): UpdatePartNumbersSimpleListType|null
    {
        return $this->partNumbers;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType|null  $partNumbers
     */
    public function withPartNumbers(UpdatePartNumbersSimpleListType|null $partNumbers): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }
}
