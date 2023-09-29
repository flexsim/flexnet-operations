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
     */
    public function __construct(SimpleQueryType $productName = null, SimpleQueryType $version = null, SimpleQueryType $description = null, SimpleQueryType $partNumber = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null, SimpleQueryType $licenseTechnology = null, SimpleQueryType $hostType = null, bool $usedOnDevice = null, ProdCustomAttributesQueryListType $productAttributes = null)
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

    public static function create(SimpleQueryType $productName = null, SimpleQueryType $version = null, SimpleQueryType $description = null, SimpleQueryType $partNumber = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null, SimpleQueryType $licenseTechnology = null, SimpleQueryType $hostType = null, bool $usedOnDevice = null, ProdCustomAttributesQueryListType $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getProductName(): ?SimpleQueryType
    {
        return $this->productName;
    }

    public function withProductName(?SimpleQueryType $productName): ProductQueryParametersType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getVersion(): ?SimpleQueryType
    {
        return $this->version;
    }

    public function withVersion(?SimpleQueryType $version): ProductQueryParametersType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?SimpleQueryType $description): ProductQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getPartNumber(): ?SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?SimpleQueryType $partNumber): ProductQueryParametersType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getState(): ?StateQueryType
    {
        return $this->state;
    }

    public function withState(?StateQueryType $state): ProductQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreationDate(): ?DateQueryType
    {
        return $this->creationDate;
    }

    public function withCreationDate(?DateQueryType $creationDate): ProductQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?DateQueryType $lastModifiedDate): ProductQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getLicenseTechnology(): ?SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?SimpleQueryType $licenseTechnology): ProductQueryParametersType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getHostType(): ?SimpleQueryType
    {
        return $this->hostType;
    }

    public function withHostType(?SimpleQueryType $hostType): ProductQueryParametersType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getUsedOnDevice(): ?bool
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(?bool $usedOnDevice): ProductQueryParametersType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getProductAttributes(): ?ProdCustomAttributesQueryListType
    {
        return $this->productAttributes;
    }

    public function withProductAttributes(?ProdCustomAttributesQueryListType $productAttributes): ProductQueryParametersType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
