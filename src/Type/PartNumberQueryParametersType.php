<?php

namespace Flexsim\FlexnetOperations\Type;

class PartNumberQueryParametersType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $partId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $productName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $licenseModel;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $creationDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $lastModifiedDate;

    /**
     * @var bool
     */
    protected $unmappedWithProduct;

    /**
     * @var bool
     */
    protected $unmappedWithLicenseModel;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseModel
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @var bool $unmappedWithProduct
     * @var bool $unmappedWithLicenseModel
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $partId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseModel = null, \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null, bool $unmappedWithProduct = null, bool $unmappedWithLicenseModel = null)
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
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseModel
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @var bool $unmappedWithProduct
     * @var bool $unmappedWithLicenseModel
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $partId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseModel = null, \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null, bool $unmappedWithProduct = null, bool $unmappedWithLicenseModel = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getPartId()
    {
        return $this->partId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $partId
     * @return $this
     */
    public function setPartId($partId)
    {
        $this->partId = $partId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @return $this
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUnmappedWithProduct()
    {
        return $this->unmappedWithProduct;
    }

    /**
     * @param bool $unmappedWithProduct
     * @return $this
     */
    public function setUnmappedWithProduct($unmappedWithProduct)
    {
        $this->unmappedWithProduct = $unmappedWithProduct;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUnmappedWithLicenseModel()
    {
        return $this->unmappedWithLicenseModel;
    }

    /**
     * @param bool $unmappedWithLicenseModel
     * @return $this
     */
    public function setUnmappedWithLicenseModel($unmappedWithLicenseModel)
    {
        $this->unmappedWithLicenseModel = $unmappedWithLicenseModel;
        return $this;
    }
}
