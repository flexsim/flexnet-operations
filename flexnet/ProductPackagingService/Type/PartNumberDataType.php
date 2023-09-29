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
    public function __construct(PartNumberIdentifierType $partNumberIdentifier, string $description, \DateTimeInterface $creationDate, \DateTimeInterface $lastModifiedDate, ProductIdentifierType $mappedProduct = null, LicenseModelIdentifierType $mappedLicenseModel = null)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;
        $this->description = $description;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->mappedProduct = $mappedProduct;
        $this->mappedLicenseModel = $mappedLicenseModel;
    }

    public static function create(PartNumberIdentifierType $partNumberIdentifier, string $description, \DateTimeInterface $creationDate, \DateTimeInterface $lastModifiedDate, ProductIdentifierType $mappedProduct = null, LicenseModelIdentifierType $mappedLicenseModel = null)
    {
        return new static(...\func_get_args());
    }

    public function getPartNumberIdentifier(): PartNumberIdentifierType
    {
        return $this->partNumberIdentifier;
    }

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

    public function getMappedProduct(): ?ProductIdentifierType
    {
        return $this->mappedProduct;
    }

    public function withMappedProduct(?ProductIdentifierType $mappedProduct): PartNumberDataType
    {
        $new = clone $this;
        $new->mappedProduct = $mappedProduct;

        return $new;
    }

    public function getMappedLicenseModel(): ?LicenseModelIdentifierType
    {
        return $this->mappedLicenseModel;
    }

    public function withMappedLicenseModel(?LicenseModelIdentifierType $mappedLicenseModel): PartNumberDataType
    {
        $new = clone $this;
        $new->mappedLicenseModel = $mappedLicenseModel;

        return $new;
    }
}
