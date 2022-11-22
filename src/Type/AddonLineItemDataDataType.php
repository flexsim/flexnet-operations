<?php

namespace Flexsim\FlexnetOperations\Type;

class AddonLineItemDataDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var string
     */
    protected $activationId;

    /**
     * @var int
     */
    protected $enabledCount;

    /**
     * @var int
     */
    protected $consumedCount;

    /**
     * @var string
     */
    protected $licenseState;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType
     */
    protected $entitledProducts;

    /**
     * @var \DateTimeInterface
     */
    protected $expirationDateOverride;

    /**
     * @var \DateTimeInterface
     */
    protected $licenseExpirationDate;

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
     * @param  string  $uniqueId
     * @param  string  $activationId
     * @param  int  $enabledCount
     * @param  int  $consumedCount
     * @param  string  $licenseState
     * @param  \Flexsim\FlexnetOperations\Type\EntitledProductDataListType  $entitledProducts
     * @param  \DateTimeInterface  $expirationDateOverride
     * @param  \DateTimeInterface  $licenseExpirationDate
     * @param  \DateTimeInterface  $createdDate
     * @param  \DateTimeInterface  $lastModifiedDate
     */
    public function __construct(
        string $uniqueId = null,
        string $activationId = null,
        int $enabledCount = null,
        int $consumedCount = null,
        string $licenseState = null,
        EntitledProductDataListType $entitledProducts = null,
        \DateTimeInterface $expirationDateOverride = null,
        \DateTimeInterface $licenseExpirationDate = null,
        \DateTimeInterface $createdDate = null,
        \DateTimeInterface $lastModifiedDate = null
    ) {
        $this->uniqueId = $uniqueId;
        $this->activationId = $activationId;
        $this->enabledCount = $enabledCount;
        $this->consumedCount = $consumedCount;
        $this->licenseState = $licenseState;
        $this->entitledProducts = $entitledProducts;
        $this->expirationDateOverride = $expirationDateOverride;
        $this->licenseExpirationDate = $licenseExpirationDate;
        $this->createdDate = $createdDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $uniqueId
     * @param  string  $activationId
     * @param  int  $enabledCount
     * @param  int  $consumedCount
     * @param  string  $licenseState
     * @param  \Flexsim\FlexnetOperations\Type\EntitledProductDataListType  $entitledProducts
     * @param  \DateTimeInterface  $expirationDateOverride
     * @param  \DateTimeInterface  $licenseExpirationDate
     * @param  \DateTimeInterface  $createdDate
     * @param  \DateTimeInterface  $lastModifiedDate
     */
    public static function create(
        string $uniqueId = null,
        string $activationId = null,
        int $enabledCount = null,
        int $consumedCount = null,
        string $licenseState = null,
        EntitledProductDataListType $entitledProducts = null,
        \DateTimeInterface $expirationDateOverride = null,
        \DateTimeInterface $licenseExpirationDate = null,
        \DateTimeInterface $createdDate = null,
        \DateTimeInterface $lastModifiedDate = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param  string  $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;

        return $this;
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
     * @return int
     */
    public function getEnabledCount()
    {
        return $this->enabledCount;
    }

    /**
     * @param  int  $enabledCount
     * @return $this
     */
    public function setEnabledCount($enabledCount)
    {
        $this->enabledCount = $enabledCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getConsumedCount()
    {
        return $this->consumedCount;
    }

    /**
     * @param  int  $consumedCount
     * @return $this
     */
    public function setConsumedCount($consumedCount)
    {
        $this->consumedCount = $consumedCount;

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
    public function getEntitledProducts()
    {
        return $this->entitledProducts;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitledProductDataListType  $entitledProducts
     * @return $this
     */
    public function setEntitledProducts($entitledProducts)
    {
        $this->entitledProducts = $entitledProducts;

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
