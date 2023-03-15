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
     *
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $partId
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $productName
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $licenseModel
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     * @param  bool|null  $unmappedWithProduct
     * @param  bool|null  $unmappedWithLicenseModel
     */
    public function __construct(SimpleQueryType|null $partId = null, SimpleQueryType|null $description = null, SimpleQueryType|null $productName = null, SimpleQueryType|null $licenseModel = null, DateQueryType|null $creationDate = null, DateQueryType|null $lastModifiedDate = null, bool|null $unmappedWithProduct = null, bool|null $unmappedWithLicenseModel = null)
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

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $partId
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $productName
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $licenseModel
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     * @param  bool|null  $unmappedWithProduct
     * @param  bool|null  $unmappedWithLicenseModel
     */
    public static function create(SimpleQueryType|null $partId = null, SimpleQueryType|null $description = null, SimpleQueryType|null $productName = null, SimpleQueryType|null $licenseModel = null, DateQueryType|null $creationDate = null, DateQueryType|null $lastModifiedDate = null, bool|null $unmappedWithProduct = null, bool|null $unmappedWithLicenseModel = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getPartId(): SimpleQueryType|null
    {
        return $this->partId;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $partId
     */
    public function withPartId(SimpleQueryType|null $partId): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->partId = $partId;

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
    public function withDescription(SimpleQueryType|null $description): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
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
    public function withProductName(SimpleQueryType|null $productName): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getLicenseModel(): SimpleQueryType|null
    {
        return $this->licenseModel;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $licenseModel
     */
    public function withLicenseModel(SimpleQueryType|null $licenseModel): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

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
    public function withCreationDate(DateQueryType|null $creationDate): PartNumberQueryParametersType
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
    public function withLastModifiedDate(DateQueryType|null $lastModifiedDate): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getUnmappedWithProduct(): bool|null
    {
        return $this->unmappedWithProduct;
    }

    public function withUnmappedWithProduct(bool|null $unmappedWithProduct): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->unmappedWithProduct = $unmappedWithProduct;

        return $new;
    }

    public function getUnmappedWithLicenseModel(): bool|null
    {
        return $this->unmappedWithLicenseModel;
    }

    public function withUnmappedWithLicenseModel(bool|null $unmappedWithLicenseModel): PartNumberQueryParametersType
    {
        $new = clone $this;
        $new->unmappedWithLicenseModel = $unmappedWithLicenseModel;

        return $new;
    }
}
