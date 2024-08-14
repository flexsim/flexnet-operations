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
    public function __construct(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $partId = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $productName = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $licenseModel = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate = null, ?bool $unmappedWithProduct = null, ?bool $unmappedWithLicenseModel = null)
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

    public static function create(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $partId = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $productName = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $licenseModel = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate = null, ?bool $unmappedWithProduct = null, ?bool $unmappedWithLicenseModel = null)
    {
        return new static(...\func_get_args());
    }

    public function getPartId(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->partId;
    }

    public function withPartId(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $partId): \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->partId = $partId;

        return $new;
    }

    public function getDescription(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description): \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getProductName(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->productName;
    }

    public function withProductName(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $productName): \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getLicenseModel(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $licenseModel): \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getCreationDate(): ?\Flexnet\ProductPackagingService\Type\DateQueryType
    {
        return $this->creationDate;
    }

    public function withCreationDate(?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate): \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?\Flexnet\ProductPackagingService\Type\DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate): \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getUnmappedWithProduct(): ?bool
    {
        return $this->unmappedWithProduct;
    }

    public function withUnmappedWithProduct(?bool $unmappedWithProduct): \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->unmappedWithProduct = $unmappedWithProduct;

        return $new;
    }

    public function getUnmappedWithLicenseModel(): ?bool
    {
        return $this->unmappedWithLicenseModel;
    }

    public function withUnmappedWithLicenseModel(?bool $unmappedWithLicenseModel): \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->unmappedWithLicenseModel = $unmappedWithLicenseModel;

        return $new;
    }
}
