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
    public function __construct(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $maintenanceName = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $version = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $partNumber = null, ?\Flexnet\ProductPackagingService\Type\StateQueryType $state = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate = null)
    {
        $this->maintenanceName = $maintenanceName;
        $this->version = $version;
        $this->description = $description;
        $this->partNumber = $partNumber;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $maintenanceName = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $version = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $partNumber = null, ?\Flexnet\ProductPackagingService\Type\StateQueryType $state = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceName(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->maintenanceName;
    }

    public function withMaintenanceName(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $maintenanceName): \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->maintenanceName = $maintenanceName;

        return $new;
    }

    public function getVersion(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->version;
    }

    public function withVersion(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $version): \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description): \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $partNumber): \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getState(): ?\Flexnet\ProductPackagingService\Type\StateQueryType
    {
        return $this->state;
    }

    public function withState(?\Flexnet\ProductPackagingService\Type\StateQueryType $state): \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreationDate(): ?\Flexnet\ProductPackagingService\Type\DateQueryType
    {
        return $this->creationDate;
    }

    public function withCreationDate(?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate): \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?\Flexnet\ProductPackagingService\Type\DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate): \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }
}
