<?php

namespace Flexsim\FlexnetOperations\Type;

class AddonData extends FlexnetType
{
    /**
     * @var string
     */
    protected $activationId;

    /**
     * @var string
     */
    protected $entitlementId;

    /**
     * @var int
     */
    protected $requestedCopies;

    /**
     * @var int
     */
    protected $consumedCopies;

    /**
     * @var int
     */
    protected $generatedCopies;

    /**
     * @var string
     */
    protected $licenseState;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType
     */
    protected $productList;

    /**
     * @var string
     */
    protected $partNumber;

    /**
     * @var \DateTimeInterface
     */
    protected $licenseExpirationDate;

    /**
     * @var bool
     */
    protected $licensePermanent;

    /**
     * @var \DateTimeInterface
     */
    protected $expirationDateOverride;

    /**
     * @var string
     */
    protected $licenseModelName;

    /**
     * @var \DateTimeInterface
     */
    protected $createdDate;

    /**
     * @var \DateTimeInterface
     */
    protected $lastModifiedDate;

    /**
     * Constructor
     *
     * @param  string  $activationId
     * @param  string  $entitlementId
     * @param  int  $requestedCopies
     * @param  int  $consumedCopies
     * @param  int  $generatedCopies
     * @param  string  $licenseState
     * @param  \Flexsim\FlexnetOperations\Type\EntitledProductDataListType  $productList
     * @param  string  $partNumber
     * @param  \DateTimeInterface  $licenseExpirationDate
     * @param  bool  $licensePermanent
     * @param  \DateTimeInterface  $expirationDateOverride
     * @param  string  $licenseModelName
     * @param  \DateTimeInterface  $createdDate
     * @param  \DateTimeInterface  $lastModifiedDate
     */
    public function __construct(string $activationId = null, string $entitlementId = null, int $requestedCopies = null, int $consumedCopies = null, int $generatedCopies = null, string $licenseState = null, EntitledProductDataListType $productList = null, string $partNumber = null, \DateTimeInterface $licenseExpirationDate = null, bool $licensePermanent = null, \DateTimeInterface $expirationDateOverride = null, string $licenseModelName = null, \DateTimeInterface $createdDate = null, \DateTimeInterface $lastModifiedDate = null)
    {
        $this->activationId = $activationId;
        $this->entitlementId = $entitlementId;
        $this->requestedCopies = $requestedCopies;
        $this->consumedCopies = $consumedCopies;
        $this->generatedCopies = $generatedCopies;
        $this->licenseState = $licenseState;
        $this->productList = $productList;
        $this->partNumber = $partNumber;
        $this->licenseExpirationDate = $licenseExpirationDate;
        $this->licensePermanent = $licensePermanent;
        $this->expirationDateOverride = $expirationDateOverride;
        $this->licenseModelName = $licenseModelName;
        $this->createdDate = $createdDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $activationId
     * @param  string  $entitlementId
     * @param  int  $requestedCopies
     * @param  int  $consumedCopies
     * @param  int  $generatedCopies
     * @param  string  $licenseState
     * @param  \Flexsim\FlexnetOperations\Type\EntitledProductDataListType  $productList
     * @param  string  $partNumber
     * @param  \DateTimeInterface  $licenseExpirationDate
     * @param  bool  $licensePermanent
     * @param  \DateTimeInterface  $expirationDateOverride
     * @param  string  $licenseModelName
     * @param  \DateTimeInterface  $createdDate
     * @param  \DateTimeInterface  $lastModifiedDate
     */
    public static function create(string $activationId = null, string $entitlementId = null, int $requestedCopies = null, int $consumedCopies = null, int $generatedCopies = null, string $licenseState = null, EntitledProductDataListType $productList = null, string $partNumber = null, \DateTimeInterface $licenseExpirationDate = null, bool $licensePermanent = null, \DateTimeInterface $expirationDateOverride = null, string $licenseModelName = null, \DateTimeInterface $createdDate = null, \DateTimeInterface $lastModifiedDate = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param  string  $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param  string  $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;

        return $this;
    }

    /**
     * @return int
     */
    public function getRequestedCopies()
    {
        return $this->requestedCopies;
    }

    /**
     * @param  int  $requestedCopies
     * @return $this
     */
    public function setRequestedCopies($requestedCopies)
    {
        $this->requestedCopies = $requestedCopies;

        return $this;
    }

    /**
     * @return int
     */
    public function getConsumedCopies()
    {
        return $this->consumedCopies;
    }

    /**
     * @param  int  $consumedCopies
     * @return $this
     */
    public function setConsumedCopies($consumedCopies)
    {
        $this->consumedCopies = $consumedCopies;

        return $this;
    }

    /**
     * @return int
     */
    public function getGeneratedCopies()
    {
        return $this->generatedCopies;
    }

    /**
     * @param  int  $generatedCopies
     * @return $this
     */
    public function setGeneratedCopies($generatedCopies)
    {
        $this->generatedCopies = $generatedCopies;

        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseState()
    {
        return $this->licenseState;
    }

    /**
     * @param  string  $licenseState
     * @return $this
     */
    public function setLicenseState($licenseState)
    {
        $this->licenseState = $licenseState;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitledProductDataListType
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitledProductDataListType  $productList
     * @return $this
     */
    public function setProductList($productList)
    {
        $this->productList = $productList;

        return $this;
    }

    /**
     * @return string
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param  string  $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLicenseExpirationDate()
    {
        return $this->licenseExpirationDate;
    }

    /**
     * @param  \DateTimeInterface  $licenseExpirationDate
     * @return $this
     */
    public function setLicenseExpirationDate($licenseExpirationDate)
    {
        $this->licenseExpirationDate = $licenseExpirationDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getLicensePermanent()
    {
        return $this->licensePermanent;
    }

    /**
     * @param  bool  $licensePermanent
     * @return $this
     */
    public function setLicensePermanent($licensePermanent)
    {
        $this->licensePermanent = $licensePermanent;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirationDateOverride()
    {
        return $this->expirationDateOverride;
    }

    /**
     * @param  \DateTimeInterface  $expirationDateOverride
     * @return $this
     */
    public function setExpirationDateOverride($expirationDateOverride)
    {
        $this->expirationDateOverride = $expirationDateOverride;

        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseModelName()
    {
        return $this->licenseModelName;
    }

    /**
     * @param  string  $licenseModelName
     * @return $this
     */
    public function setLicenseModelName($licenseModelName)
    {
        $this->licenseModelName = $licenseModelName;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param  \DateTimeInterface  $createdDate
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

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
}
