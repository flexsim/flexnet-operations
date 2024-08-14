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
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType $partNumberIdentifier, string $description, \DateTimeInterface $creationDate, \DateTimeInterface $lastModifiedDate, ?\Flexnet\ProductPackagingService\Type\ProductIdentifierType $mappedProduct = null, ?\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType $mappedLicenseModel = null)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;
        $this->description = $description;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->mappedProduct = $mappedProduct;
        $this->mappedLicenseModel = $mappedLicenseModel;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType $partNumberIdentifier, string $description, \DateTimeInterface $creationDate, \DateTimeInterface $lastModifiedDate, ?\Flexnet\ProductPackagingService\Type\ProductIdentifierType $mappedProduct = null, ?\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType $mappedLicenseModel = null)
    {
        return new static(...\func_get_args());
    }

    public function getPartNumberIdentifier(): \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType
    {
        return $this->partNumberIdentifier;
    }

    public function withPartNumberIdentifier(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType $partNumberIdentifier): \Flexnet\ProductPackagingService\Type\PartNumberDataType
    {
        $new = clone $this;
        $new->partNumberIdentifier = $partNumberIdentifier;

        return $new;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function withDescription(string $description): \Flexnet\ProductPackagingService\Type\PartNumberDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getCreationDate(): \DateTimeInterface
    {
        return $this->creationDate;
    }

    public function withCreationDate(\DateTimeInterface $creationDate): \Flexnet\ProductPackagingService\Type\PartNumberDataType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): \DateTimeInterface
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(\DateTimeInterface $lastModifiedDate): \Flexnet\ProductPackagingService\Type\PartNumberDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getMappedProduct(): ?\Flexnet\ProductPackagingService\Type\ProductIdentifierType
    {
        return $this->mappedProduct;
    }

    public function withMappedProduct(?\Flexnet\ProductPackagingService\Type\ProductIdentifierType $mappedProduct): \Flexnet\ProductPackagingService\Type\PartNumberDataType
    {
        $new = clone $this;
        $new->mappedProduct = $mappedProduct;

        return $new;
    }

    public function getMappedLicenseModel(): ?\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType
    {
        return $this->mappedLicenseModel;
    }

    public function withMappedLicenseModel(?\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType $mappedLicenseModel): \Flexnet\ProductPackagingService\Type\PartNumberDataType
    {
        $new = clone $this;
        $new->mappedLicenseModel = $mappedLicenseModel;

        return $new;
    }
}
