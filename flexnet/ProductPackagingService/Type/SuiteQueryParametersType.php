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
     *
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $suiteName
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $version
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\ProductPackagingService\Type\StateQueryType|null  $state
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $hostType
     * @param  bool|null  $usedOnDevice
     * @param  \Flexnet\ProductPackagingService\Type\SuiteCustomAttributesQueryListType|null  $productAttributes
     */
    public function __construct(SimpleQueryType|null $suiteName = null, SimpleQueryType|null $version = null, SimpleQueryType|null $description = null, SimpleQueryType|null $partNumber = null, StateQueryType|null $state = null, DateQueryType|null $creationDate = null, DateQueryType|null $lastModifiedDate = null, SimpleQueryType|null $licenseTechnology = null, SimpleQueryType|null $hostType = null, bool|null $usedOnDevice = null, SuiteCustomAttributesQueryListType|null $productAttributes = null)
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

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $suiteName
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $version
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\ProductPackagingService\Type\StateQueryType|null  $state
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $hostType
     * @param  bool|null  $usedOnDevice
     * @param  \Flexnet\ProductPackagingService\Type\SuiteCustomAttributesQueryListType|null  $productAttributes
     */
    public static function create(SimpleQueryType|null $suiteName = null, SimpleQueryType|null $version = null, SimpleQueryType|null $description = null, SimpleQueryType|null $partNumber = null, StateQueryType|null $state = null, DateQueryType|null $creationDate = null, DateQueryType|null $lastModifiedDate = null, SimpleQueryType|null $licenseTechnology = null, SimpleQueryType|null $hostType = null, bool|null $usedOnDevice = null, SuiteCustomAttributesQueryListType|null $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getSuiteName(): SimpleQueryType|null
    {
        return $this->suiteName;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $suiteName
     */
    public function withSuiteName(SimpleQueryType|null $suiteName): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->suiteName = $suiteName;

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
    public function withVersion(SimpleQueryType|null $version): SuiteQueryParametersType
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
    public function withDescription(SimpleQueryType|null $description): SuiteQueryParametersType
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
    public function withPartNumber(SimpleQueryType|null $partNumber): SuiteQueryParametersType
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
    public function withState(StateQueryType|null $state): SuiteQueryParametersType
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
    public function withCreationDate(DateQueryType|null $creationDate): SuiteQueryParametersType
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
    public function withLastModifiedDate(DateQueryType|null $lastModifiedDate): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getLicenseTechnology(): SimpleQueryType|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $licenseTechnology
     */
    public function withLicenseTechnology(SimpleQueryType|null $licenseTechnology): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getHostType(): SimpleQueryType|null
    {
        return $this->hostType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $hostType
     */
    public function withHostType(SimpleQueryType|null $hostType): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getUsedOnDevice(): bool|null
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(bool|null $usedOnDevice): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SuiteCustomAttributesQueryListType|null
     */
    public function getProductAttributes(): SuiteCustomAttributesQueryListType|null
    {
        return $this->productAttributes;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteCustomAttributesQueryListType|null  $productAttributes
     */
    public function withProductAttributes(SuiteCustomAttributesQueryListType|null $productAttributes): SuiteQueryParametersType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
