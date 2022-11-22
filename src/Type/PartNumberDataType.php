<?php

namespace Flexsim\FlexnetOperations\Type;

class PartNumberDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    protected $partNumberIdentifier;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTimeInterface
     */
    protected $creationDate;

    /**
     * @var \DateTimeInterface
     */
    protected $lastModifiedDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $mappedProduct;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    protected $mappedLicenseModel;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType  $partNumberIdentifier
     * @param  string  $description
     * @param  \DateTimeInterface  $creationDate
     * @param  \DateTimeInterface  $lastModifiedDate
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $mappedProduct
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $mappedLicenseModel
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

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType  $partNumberIdentifier
     * @param  string  $description
     * @param  \DateTimeInterface  $creationDate
     * @param  \DateTimeInterface  $lastModifiedDate
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $mappedProduct
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $mappedLicenseModel
     */
    public static function create(PartNumberIdentifierType $partNumberIdentifier, string $description, \DateTimeInterface $creationDate, \DateTimeInterface $lastModifiedDate, ProductIdentifierType $mappedProduct = null, LicenseModelIdentifierType $mappedLicenseModel = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    public function getPartNumberIdentifier()
    {
        return $this->partNumberIdentifier;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType  $partNumberIdentifier
     * @return $this
     */
    public function setPartNumberIdentifier($partNumberIdentifier)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param  string  $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param  \DateTimeInterface  $creationDate
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param  \DateTimeInterface  $lastModifiedDate
     * @return $this
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    public function getMappedProduct()
    {
        return $this->mappedProduct;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $mappedProduct
     * @return $this
     */
    public function setMappedProduct($mappedProduct)
    {
        $this->mappedProduct = $mappedProduct;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getMappedLicenseModel()
    {
        return $this->mappedLicenseModel;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $mappedLicenseModel
     * @return $this
     */
    public function setMappedLicenseModel($mappedLicenseModel)
    {
        $this->mappedLicenseModel = $mappedLicenseModel;

        return $this;
    }
}
