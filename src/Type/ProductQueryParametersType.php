<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductQueryParametersType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $productName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $version;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $partNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    private $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $creationDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $lastModifiedDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $hostType;

    /**
     * @var bool
     */
    private $usedOnDevice;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProdCustomAttributesQueryListType
     */
    private $productAttributes;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $version
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostType
     * @var bool $usedOnDevice
     * @var \Flexsim\FlexnetOperations\Type\ProdCustomAttributesQueryListType $productAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $productName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $version = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null, \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostType = null, bool $usedOnDevice = null, \Flexsim\FlexnetOperations\Type\ProdCustomAttributesQueryListType $productAttributes = null)
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
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $version
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostType
     * @var bool $usedOnDevice
     * @var \Flexsim\FlexnetOperations\Type\ProdCustomAttributesQueryListType $productAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $productName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $version = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null, \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostType = null, bool $usedOnDevice = null, \Flexsim\FlexnetOperations\Type\ProdCustomAttributesQueryListType $productAttributes = null)
    {
        return new self(...func_get_args());
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
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
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
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
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
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getHostType()
    {
        return $this->hostType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostType
     * @return $this
     */
    public function setHostType($hostType)
    {
        $this->hostType = $hostType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUsedOnDevice()
    {
        return $this->usedOnDevice;
    }

    /**
     * @param bool $usedOnDevice
     * @return $this
     */
    public function setUsedOnDevice($usedOnDevice)
    {
        $this->usedOnDevice = $usedOnDevice;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProdCustomAttributesQueryListType
     */
    public function getProductAttributes()
    {
        return $this->productAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProdCustomAttributesQueryListType $productAttributes
     * @return $this
     */
    public function setProductAttributes($productAttributes)
    {
        $this->productAttributes = $productAttributes;
        return $this;
    }


}

