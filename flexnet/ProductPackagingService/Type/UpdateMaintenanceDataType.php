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
     */
    public function __construct(MaintenanceIdentifierType $maintenanceIdentifier, string $name = null, string $version = null, string $description = null, bool $allowUpgrades = null, bool $allowUpsells = null, bool $allowRenewals = null, UpdatePartNumbersSimpleListType $partNumbers = null)
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

    public static function create(MaintenanceIdentifierType $maintenanceIdentifier, string $name = null, string $version = null, string $description = null, bool $allowUpgrades = null, bool $allowUpsells = null, bool $allowRenewals = null, UpdatePartNumbersSimpleListType $partNumbers = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceIdentifier(): MaintenanceIdentifierType
    {
        return $this->maintenanceIdentifier;
    }

    public function withMaintenanceIdentifier(MaintenanceIdentifierType $maintenanceIdentifier): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getAllowUpgrades(): ?bool
    {
        return $this->allowUpgrades;
    }

    public function withAllowUpgrades(?bool $allowUpgrades): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowUpgrades = $allowUpgrades;

        return $new;
    }

    public function getAllowUpsells(): ?bool
    {
        return $this->allowUpsells;
    }

    public function withAllowUpsells(?bool $allowUpsells): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowUpsells = $allowUpsells;

        return $new;
    }

    public function getAllowRenewals(): ?bool
    {
        return $this->allowRenewals;
    }

    public function withAllowRenewals(?bool $allowRenewals): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowRenewals = $allowRenewals;

        return $new;
    }

    public function getPartNumbers(): ?UpdatePartNumbersSimpleListType
    {
        return $this->partNumbers;
    }

    public function withPartNumbers(?UpdatePartNumbersSimpleListType $partNumbers): UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }
}
