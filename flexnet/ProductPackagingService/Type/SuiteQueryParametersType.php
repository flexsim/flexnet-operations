<?php

namespace Flexnet\ProductPackagingService\Type;

class SuiteQueryParametersType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $suiteName;

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
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $licenseTechnology;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $hostType;

    /**
     * @var bool|null
     */
    private $usedOnDevice;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SuiteCustomAttributesQueryListType|null
     */
    private $productAttributes;

    /**
     * Constructor
     */
    public function __construct(SimpleQueryType $suiteName = null, SimpleQueryType $version = null, SimpleQueryType $description = null, SimpleQueryType $partNumber = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null, SimpleQueryType $licenseTechnology = null, SimpleQueryType $hostType = null, bool $usedOnDevice = null, SuiteCustomAttributesQueryListType $productAttributes = null)
    {
        $this->suiteName = $suiteName;
        $this->version = $version;
        $this->description = $description;
        $this->partNumber = $partNumber;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->licenseTechnology = $licenseTechnology;
        $this->hostType = $hostType;
        $this->usedOnDevice = $usedOnDevice;
        $this->productAttributes = $productAttributes;
    }

    public static function create(SimpleQueryType $suiteName = null, SimpleQueryType $version = null, SimpleQueryType $description = null, SimpleQueryType $partNumber = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null, SimpleQueryType $licenseTechnology = null, SimpleQueryType $hostType = null, bool $usedOnDevice = null, SuiteCustomAttributesQueryListType $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteName(): ?SimpleQueryType
    {
        return $this->suiteName;
    }

    public function withSuiteName(?SimpleQueryType $suiteName): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->suiteName = $suiteName;

        return $new;
    }

    public function getVersion(): ?SimpleQueryType
    {
        return $this->version;
    }

    public function withVersion(?SimpleQueryType $version): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?SimpleQueryType $description): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getPartNumber(): ?SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?SimpleQueryType $partNumber): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getState(): ?StateQueryType
    {
        return $this->state;
    }

    public function withState(?StateQueryType $state): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreationDate(): ?DateQueryType
    {
        return $this->creationDate;
    }

    public function withCreationDate(?DateQueryType $creationDate): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?DateQueryType $lastModifiedDate): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getLicenseTechnology(): ?SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?SimpleQueryType $licenseTechnology): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getHostType(): ?SimpleQueryType
    {
        return $this->hostType;
    }

    public function withHostType(?SimpleQueryType $hostType): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getUsedOnDevice(): ?bool
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(?bool $usedOnDevice): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getProductAttributes(): ?SuiteCustomAttributesQueryListType
    {
        return $this->productAttributes;
    }

    public function withProductAttributes(?SuiteCustomAttributesQueryListType $productAttributes): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
