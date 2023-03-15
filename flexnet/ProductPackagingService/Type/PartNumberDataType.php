<?php

namespace Flexnet\ProductPackagingService\Type;

class PartNumberDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType
     */
    private $partNumberIdentifier;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTimeInterface
     */
    private $creationDate;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType|null
     */
    private $mappedProduct;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|null
     */
    private $mappedLicenseModel;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType  $partNumberIdentifier
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType|null  $mappedProduct
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|null  $mappedLicenseModel
     */
    public function __construct(PartNumberIdentifierType $partNumberIdentifier, string $description, \DateTimeInterface $creationDate, \DateTimeInterface $lastModifiedDate, ProductIdentifierType|null $mappedProduct = null, LicenseModelIdentifierType|null $mappedLicenseModel = null)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;
        $this->description = $description;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->mappedProduct = $mappedProduct;
        $this->mappedLicenseModel = $mappedLicenseModel;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType  $partNumberIdentifier
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType|null  $mappedProduct
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|null  $mappedLicenseModel
     */
    public static function create(PartNumberIdentifierType $partNumberIdentifier, string $description, \DateTimeInterface $creationDate, \DateTimeInterface $lastModifiedDate, ProductIdentifierType|null $mappedProduct = null, LicenseModelIdentifierType|null $mappedLicenseModel = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType
     */
    public function getPartNumberIdentifier(): PartNumberIdentifierType
    {
        return $this->partNumberIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType  $partNumberIdentifier
     */
    public function withPartNumberIdentifier(PartNumberIdentifierType $partNumberIdentifier): PartNumberDataType
    {
        $new = clone $this;
        $new->partNumberIdentifier = $partNumberIdentifier;

        return $new;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function withDescription(string $description): PartNumberDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getCreationDate(): \DateTimeInterface
    {
        return $this->creationDate;
    }

    public function withCreationDate(\DateTimeInterface $creationDate): PartNumberDataType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): \DateTimeInterface
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(\DateTimeInterface $lastModifiedDate): PartNumberDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductIdentifierType|null
     */
    public function getMappedProduct(): ProductIdentifierType|null
    {
        return $this->mappedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType|null  $mappedProduct
     */
    public function withMappedProduct(ProductIdentifierType|null $mappedProduct): PartNumberDataType
    {
        $new = clone $this;
        $new->mappedProduct = $mappedProduct;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|null
     */
    public function getMappedLicenseModel(): LicenseModelIdentifierType|null
    {
        return $this->mappedLicenseModel;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|null  $mappedLicenseModel
     */
    public function withMappedLicenseModel(LicenseModelIdentifierType|null $mappedLicenseModel): PartNumberDataType
    {
        $new = clone $this;
        $new->mappedLicenseModel = $mappedLicenseModel;

        return $new;
    }
}
