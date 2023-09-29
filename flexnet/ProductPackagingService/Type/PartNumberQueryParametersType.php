<?php

namespace Flexnet\ProductPackagingService\Type;

class PartNumberQueryParametersType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $partId;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $description;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $productName;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $licenseModel;

    /**
     * @var \Flexnet\ProductPackagingService\Type\DateQueryType|null
     */
    private $creationDate;

    /**
     * @var \Flexnet\ProductPackagingService\Type\DateQueryType|null
     */
    private $lastModifiedDate;

    /**
     * @var bool|null
     */
    private $unmappedWithProduct;

    /**
     * @var bool|null
     */
    private $unmappedWithLicenseModel;

    /**
     * Constructor
     */
    public function __construct(SimpleQueryType $partId = null, SimpleQueryType $description = null, SimpleQueryType $productName = null, SimpleQueryType $licenseModel = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null, bool $unmappedWithProduct = null, bool $unmappedWithLicenseModel = null)
    {
        $this->partId = $partId;
        $this->description = $description;
        $this->productName = $productName;
        $this->licenseModel = $licenseModel;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->unmappedWithProduct = $unmappedWithProduct;
        $this->unmappedWithLicenseModel = $unmappedWithLicenseModel;
    }

    public static function create(SimpleQueryType $partId = null, SimpleQueryType $description = null, SimpleQueryType $productName = null, SimpleQueryType $licenseModel = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null, bool $unmappedWithProduct = null, bool $unmappedWithLicenseModel = null)
    {
        return new static(...\func_get_args());
    }

    public function getPartId(): ?SimpleQueryType
    {
        return $this->partId;
    }

    public function withPartId(?SimpleQueryType $partId): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->partId = $partId;

        return $new;
    }

    public function getDescription(): ?SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?SimpleQueryType $description): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getProductName(): ?SimpleQueryType
    {
        return $this->productName;
    }

    public function withProductName(?SimpleQueryType $productName): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getLicenseModel(): ?SimpleQueryType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?SimpleQueryType $licenseModel): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getCreationDate(): ?DateQueryType
    {
        return $this->creationDate;
    }

    public function withCreationDate(?DateQueryType $creationDate): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?DateQueryType $lastModifiedDate): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getUnmappedWithProduct(): ?bool
    {
        return $this->unmappedWithProduct;
    }

    public function withUnmappedWithProduct(?bool $unmappedWithProduct): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->unmappedWithProduct = $unmappedWithProduct;

        return $new;
    }

    public function getUnmappedWithLicenseModel(): ?bool
    {
        return $this->unmappedWithLicenseModel;
    }

    public function withUnmappedWithLicenseModel(?bool $unmappedWithLicenseModel): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->unmappedWithLicenseModel = $unmappedWithLicenseModel;

        return $new;
    }
}
