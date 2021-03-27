<?php

namespace Flexsim\FlexnetOperations\Type;

class AddonLineItemDataDataType
{

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $activationId;

    /**
     * @var int
     */
    private $enabledCount;

    /**
     * @var int
     */
    private $consumedCount;

    /**
     * @var string
     */
    private $licenseState;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType
     */
    private $entitledProducts;

    /**
     * @var \DateTimeInterface
     */
    private $expirationDateOverride;

    /**
     * Constructor
     *
     * @var string $uniqueId
     * @var string $activationId
     * @var int $enabledCount
     * @var int $consumedCount
     * @var string $licenseState
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @var \DateTimeInterface $expirationDateOverride
     */
    public function __construct(string $uniqueId = null, string $activationId = null, int $enabledCount = null, int $consumedCount = null, string $licenseState = null, \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null, \DateTimeInterface $expirationDateOverride = null)
    {
        $this->uniqueId = $uniqueId;
        $this->activationId = $activationId;
        $this->enabledCount = $enabledCount;
        $this->consumedCount = $consumedCount;
        $this->licenseState = $licenseState;
        $this->entitledProducts = $entitledProducts;
        $this->expirationDateOverride = $expirationDateOverride;
    }

    /**
     * create a new instance of this class
     *
     * @var string $uniqueId
     * @var string $activationId
     * @var int $enabledCount
     * @var int $consumedCount
     * @var string $licenseState
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @var \DateTimeInterface $expirationDateOverride
     */
    public static function create(string $uniqueId = null, string $activationId = null, int $enabledCount = null, int $consumedCount = null, string $licenseState = null, \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null, \DateTimeInterface $expirationDateOverride = null)
    {
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
     * @param string $uniqueId
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
     * @param string $activationId
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
     * @param int $enabledCount
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
     * @param int $consumedCount
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
     * @param string $licenseState
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
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
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
     * @param \DateTimeInterface $expirationDateOverride
     * @return $this
     */
    public function setExpirationDateOverride($expirationDateOverride)
    {
        $this->expirationDateOverride = $expirationDateOverride;
        return $this;
    }


}

