<?php

namespace Flexnet\ProductPackagingService\Type;

class MaintenanceQueryParametersType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $maintenanceName;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $version;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $description;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $partNumber;

    /**
     * @var \Flexnet\ProductPackagingService\Type\StateQueryType|null
     */
    private $state;

    /**
     * @var \Flexnet\ProductPackagingService\Type\DateQueryType|null
     */
    private $creationDate;

    /**
     * @var \Flexnet\ProductPackagingService\Type\DateQueryType|null
     */
    private $lastModifiedDate;

    /**
     * Constructor
     */
    public function __construct(SimpleQueryType $maintenanceName = null, SimpleQueryType $version = null, SimpleQueryType $description = null, SimpleQueryType $partNumber = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null)
    {
        $this->maintenanceName = $maintenanceName;
        $this->version = $version;
        $this->description = $description;
        $this->partNumber = $partNumber;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    public static function create(SimpleQueryType $maintenanceName = null, SimpleQueryType $version = null, SimpleQueryType $description = null, SimpleQueryType $partNumber = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceName(): ?SimpleQueryType
    {
        return $this->maintenanceName;
    }

    public function withMaintenanceName(?SimpleQueryType $maintenanceName): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->maintenanceName = $maintenanceName;

        return $new;
    }

    public function getVersion(): ?SimpleQueryType
    {
        return $this->version;
    }

    public function withVersion(?SimpleQueryType $version): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?SimpleQueryType $description): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getPartNumber(): ?SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?SimpleQueryType $partNumber): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getState(): ?StateQueryType
    {
        return $this->state;
    }

    public function withState(?StateQueryType $state): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreationDate(): ?DateQueryType
    {
        return $this->creationDate;
    }

    public function withCreationDate(?DateQueryType $creationDate): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?DateQueryType $lastModifiedDate): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }
}
