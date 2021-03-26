<?php

namespace Flexsim\FlexnetOperations\Type;

class MaintenanceQueryDataType
{

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $maintenanceName;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $state;

    /**
     * @var bool
     */
    private $allowUpgrades;

    /**
     * @var bool
     */
    private $allowUpsells;

    /**
     * @var bool
     */
    private $allowRenewals;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType
     */
    private $partNumbers;

    /**
     * Constructor
     *
     * @var string $uniqueId
     * @var string $maintenanceName
     * @var string $version
     * @var string $description
     * @var string $state
     * @var bool $allowUpgrades
     * @var bool $allowUpsells
     * @var bool $allowRenewals
     * @var \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType $partNumbers
     */
    public function __construct(string $uniqueId, string $maintenanceName, string $version = null, string $description = null, string $state, bool $allowUpgrades = null, bool $allowUpsells = null, bool $allowRenewals = null, \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType $partNumbers = null)
    {
        $this->uniqueId = $uniqueId;
        $this->maintenanceName = $maintenanceName;
        $this->version = $version;
        $this->description = $description;
        $this->state = $state;
        $this->allowUpgrades = $allowUpgrades;
        $this->allowUpsells = $allowUpsells;
        $this->allowRenewals = $allowRenewals;
        $this->partNumbers = $partNumbers;
    }

    /**
     * create a new instance of this class
     *
     * @var string $uniqueId
     * @var string $maintenanceName
     * @var string $version
     * @var string $description
     * @var string $state
     * @var bool $allowUpgrades
     * @var bool $allowUpsells
     * @var bool $allowRenewals
     * @var \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType $partNumbers
     */
    public static function create(string $uniqueId, string $maintenanceName, string $version = null, string $description = null, string $state, bool $allowUpgrades = null, bool $allowUpsells = null, bool $allowRenewals = null, \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType $partNumbers = null)
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
    public function getMaintenanceName()
    {
        return $this->maintenanceName;
    }

    /**
     * @param string $maintenanceName
     * @return $this
     */
    public function setMaintenanceName($maintenanceName)
    {
        $this->maintenanceName = $maintenanceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
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
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowUpgrades()
    {
        return $this->allowUpgrades;
    }

    /**
     * @param bool $allowUpgrades
     * @return $this
     */
    public function setAllowUpgrades($allowUpgrades)
    {
        $this->allowUpgrades = $allowUpgrades;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowUpsells()
    {
        return $this->allowUpsells;
    }

    /**
     * @param bool $allowUpsells
     * @return $this
     */
    public function setAllowUpsells($allowUpsells)
    {
        $this->allowUpsells = $allowUpsells;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowRenewals()
    {
        return $this->allowRenewals;
    }

    /**
     * @param bool $allowRenewals
     * @return $this
     */
    public function setAllowRenewals($allowRenewals)
    {
        $this->allowRenewals = $allowRenewals;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType
     */
    public function getPartNumbers()
    {
        return $this->partNumbers;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType $partNumbers
     * @return $this
     */
    public function setPartNumbers($partNumbers)
    {
        $this->partNumbers = $partNumbers;
        return $this;
    }


}

