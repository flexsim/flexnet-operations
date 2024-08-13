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
     */
    public function __construct(string $uniqueId, string $maintenanceName, string $state, ?string $version = null, ?string $description = null, ?bool $allowUpgrades = null, ?bool $allowUpsells = null, ?bool $allowRenewals = null, ?\Flexnet\ProductPackagingService\Type\PartNumbersSimpleListType $partNumbers = null)
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

    public static function create(string $uniqueId, string $maintenanceName, string $state, ?string $version = null, ?string $description = null, ?bool $allowUpgrades = null, ?bool $allowUpsells = null, ?bool $allowRenewals = null, ?\Flexnet\ProductPackagingService\Type\PartNumbersSimpleListType $partNumbers = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getMaintenanceName(): string
    {
        return $this->maintenanceName;
    }

    public function withMaintenanceName(string $maintenanceName): \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->maintenanceName = $maintenanceName;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function withState(string $state): \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getAllowUpgrades(): ?bool
    {
        return $this->allowUpgrades;
    }

    public function withAllowUpgrades(?bool $allowUpgrades): \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->allowUpgrades = $allowUpgrades;

        return $new;
    }

    public function getAllowUpsells(): ?bool
    {
        return $this->allowUpsells;
    }

    public function withAllowUpsells(?bool $allowUpsells): \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->allowUpsells = $allowUpsells;

        return $new;
    }

    public function getAllowRenewals(): ?bool
    {
        return $this->allowRenewals;
    }

    public function withAllowRenewals(?bool $allowRenewals): \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->allowRenewals = $allowRenewals;

        return $new;
    }

    public function getPartNumbers(): ?\Flexnet\ProductPackagingService\Type\PartNumbersSimpleListType
    {
        return $this->partNumbers;
    }

    public function withPartNumbers(?\Flexnet\ProductPackagingService\Type\PartNumbersSimpleListType $partNumbers): \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }
}
