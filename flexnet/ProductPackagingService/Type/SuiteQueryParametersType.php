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
    public function __construct(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $suiteName = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $version = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $partNumber = null, ?\Flexnet\ProductPackagingService\Type\StateQueryType $state = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $licenseTechnology = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $hostType = null, ?bool $usedOnDevice = null, ?\Flexnet\ProductPackagingService\Type\SuiteCustomAttributesQueryListType $productAttributes = null)
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

    public static function create(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $suiteName = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $version = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $partNumber = null, ?\Flexnet\ProductPackagingService\Type\StateQueryType $state = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $licenseTechnology = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $hostType = null, ?bool $usedOnDevice = null, ?\Flexnet\ProductPackagingService\Type\SuiteCustomAttributesQueryListType $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteName(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->suiteName;
    }

    public function withSuiteName(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $suiteName): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->suiteName = $suiteName;

        return $new;
    }

    public function getVersion(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->version;
    }

    public function withVersion(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $version): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $partNumber): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getState(): ?\Flexnet\ProductPackagingService\Type\StateQueryType
    {
        return $this->state;
    }

    public function withState(?\Flexnet\ProductPackagingService\Type\StateQueryType $state): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreationDate(): ?\Flexnet\ProductPackagingService\Type\DateQueryType
    {
        return $this->creationDate;
    }

    public function withCreationDate(?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?\Flexnet\ProductPackagingService\Type\DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getLicenseTechnology(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $licenseTechnology): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getHostType(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->hostType;
    }

    public function withHostType(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $hostType): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getUsedOnDevice(): ?bool
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(?bool $usedOnDevice): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getProductAttributes(): ?\Flexnet\ProductPackagingService\Type\SuiteCustomAttributesQueryListType
    {
        return $this->productAttributes;
    }

    public function withProductAttributes(?\Flexnet\ProductPackagingService\Type\SuiteCustomAttributesQueryListType $productAttributes): \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
