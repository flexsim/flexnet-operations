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
    public function __construct(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier, ?string $name = null, ?string $version = null, ?string $description = null, ?bool $allowUpgrades = null, ?bool $allowUpsells = null, ?bool $allowRenewals = null, ?\Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType $partNumbers = null)
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

    public static function create(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier, ?string $name = null, ?string $version = null, ?string $description = null, ?bool $allowUpgrades = null, ?bool $allowUpsells = null, ?bool $allowRenewals = null, ?\Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType $partNumbers = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceIdentifier(): \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType
    {
        return $this->maintenanceIdentifier;
    }

    public function withMaintenanceIdentifier(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getAllowUpgrades(): ?bool
    {
        return $this->allowUpgrades;
    }

    public function withAllowUpgrades(?bool $allowUpgrades): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowUpgrades = $allowUpgrades;

        return $new;
    }

    public function getAllowUpsells(): ?bool
    {
        return $this->allowUpsells;
    }

    public function withAllowUpsells(?bool $allowUpsells): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowUpsells = $allowUpsells;

        return $new;
    }

    public function getAllowRenewals(): ?bool
    {
        return $this->allowRenewals;
    }

    public function withAllowRenewals(?bool $allowRenewals): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->allowRenewals = $allowRenewals;

        return $new;
    }

    public function getPartNumbers(): ?\Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType
    {
        return $this->partNumbers;
    }

    public function withPartNumbers(?\Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType $partNumbers): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }
}
