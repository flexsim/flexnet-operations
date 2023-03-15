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
     *
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $maintenanceName
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $version
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\ProductPackagingService\Type\StateQueryType|null  $state
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     */
    public function __construct(SimpleQueryType|null $maintenanceName = null, SimpleQueryType|null $version = null, SimpleQueryType|null $description = null, SimpleQueryType|null $partNumber = null, StateQueryType|null $state = null, DateQueryType|null $creationDate = null, DateQueryType|null $lastModifiedDate = null)
    {
        $this->maintenanceName = $maintenanceName;
        $this->version = $version;
        $this->description = $description;
        $this->partNumber = $partNumber;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $maintenanceName
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $version
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\ProductPackagingService\Type\StateQueryType|null  $state
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     */
    public static function create(SimpleQueryType|null $maintenanceName = null, SimpleQueryType|null $version = null, SimpleQueryType|null $description = null, SimpleQueryType|null $partNumber = null, StateQueryType|null $state = null, DateQueryType|null $creationDate = null, DateQueryType|null $lastModifiedDate = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getMaintenanceName(): SimpleQueryType|null
    {
        return $this->maintenanceName;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $maintenanceName
     */
    public function withMaintenanceName(SimpleQueryType|null $maintenanceName): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->maintenanceName = $maintenanceName;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getVersion(): SimpleQueryType|null
    {
        return $this->version;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $version
     */
    public function withVersion(SimpleQueryType|null $version): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getDescription(): SimpleQueryType|null
    {
        return $this->description;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     */
    public function withDescription(SimpleQueryType|null $description): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getPartNumber(): SimpleQueryType|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $partNumber
     */
    public function withPartNumber(SimpleQueryType|null $partNumber): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\StateQueryType|null
     */
    public function getState(): StateQueryType|null
    {
        return $this->state;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StateQueryType|null  $state
     */
    public function withState(StateQueryType|null $state): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DateQueryType|null
     */
    public function getCreationDate(): DateQueryType|null
    {
        return $this->creationDate;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     */
    public function withCreationDate(DateQueryType|null $creationDate): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DateQueryType|null
     */
    public function getLastModifiedDate(): DateQueryType|null
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     */
    public function withLastModifiedDate(DateQueryType|null $lastModifiedDate): MaintenanceQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }
}
