<?php

namespace Flexnet\ProductPackagingService\Type;

class ProductQueryParametersType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $productName;

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
     * @var \Flexnet\ProductPackagingService\Type\ProdCustomAttributesQueryListType|null
     */
    private $productAttributes;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $productName
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $version
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\ProductPackagingService\Type\StateQueryType|null  $state
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $hostType
     * @param  bool|null  $usedOnDevice
     * @param  \Flexnet\ProductPackagingService\Type\ProdCustomAttributesQueryListType|null  $productAttributes
     */
    public function __construct(SimpleQueryType|null $productName = null, SimpleQueryType|null $version = null, SimpleQueryType|null $description = null, SimpleQueryType|null $partNumber = null, StateQueryType|null $state = null, DateQueryType|null $creationDate = null, DateQueryType|null $lastModifiedDate = null, SimpleQueryType|null $licenseTechnology = null, SimpleQueryType|null $hostType = null, bool|null $usedOnDevice = null, ProdCustomAttributesQueryListType|null $productAttributes = null)
    {
        $this->productName = $productName;
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
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $productName
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $version
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\ProductPackagingService\Type\StateQueryType|null  $state
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $hostType
     * @param  bool|null  $usedOnDevice
     * @param  \Flexnet\ProductPackagingService\Type\ProdCustomAttributesQueryListType|null  $productAttributes
     */
    public static function create(SimpleQueryType|null $productName = null, SimpleQueryType|null $version = null, SimpleQueryType|null $description = null, SimpleQueryType|null $partNumber = null, StateQueryType|null $state = null, DateQueryType|null $creationDate = null, DateQueryType|null $lastModifiedDate = null, SimpleQueryType|null $licenseTechnology = null, SimpleQueryType|null $hostType = null, bool|null $usedOnDevice = null, ProdCustomAttributesQueryListType|null $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getProductName(): SimpleQueryType|null
    {
        return $this->productName;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $productName
     */
    public function withProductName(SimpleQueryType|null $productName): ProductQueryParametersType
    {
        $new = clone $this;
        $new->productName = $productName;

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
    public function withVersion(SimpleQueryType|null $version): ProductQueryParametersType
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
    public function withDescription(SimpleQueryType|null $description): ProductQueryParametersType
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
    public function withPartNumber(SimpleQueryType|null $partNumber): ProductQueryParametersType
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
    public function withState(StateQueryType|null $state): ProductQueryParametersType
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
    public function withCreationDate(DateQueryType|null $creationDate): ProductQueryParametersType
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
    public function withLastModifiedDate(DateQueryType|null $lastModifiedDate): ProductQueryParametersType
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
    public function withLicenseTechnology(SimpleQueryType|null $licenseTechnology): ProductQueryParametersType
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
    public function withHostType(SimpleQueryType|null $hostType): ProductQueryParametersType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getUsedOnDevice(): bool|null
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(bool|null $usedOnDevice): ProductQueryParametersType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProdCustomAttributesQueryListType|null
     */
    public function getProductAttributes(): ProdCustomAttributesQueryListType|null
    {
        return $this->productAttributes;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProdCustomAttributesQueryListType|null  $productAttributes
     */
    public function withProductAttributes(ProdCustomAttributesQueryListType|null $productAttributes): ProductQueryParametersType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
