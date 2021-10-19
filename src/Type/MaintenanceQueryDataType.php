<?php

namespace Flexsim\FlexnetOperations\Type;

class MaintenanceQueryDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var string
     */
    protected $maintenanceName;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var bool
     */
    protected $allowUpgrades;

    /**
     * @var bool
     */
    protected $allowUpsells;

    /**
     * @var bool
     */
    protected $allowRenewals;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType
     */
    protected $partNumbers;

    /**
     * Constructor
     *
     * @param string $uniqueId
     * @param string $maintenanceName
     * @param string $state
     * @param string $version
     * @param string $description
     * @param bool $allowUpgrades
     * @param bool $allowUpsells
     * @param bool $allowRenewals
     * @param \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType $partNumbers
     */
    public function __construct(
        string $uniqueId,
        string $maintenanceName,
        string $state,
        string $version = null,
        string $description = null,
        bool $allowUpgrades = null,
        bool $allowUpsells = null,
        bool $allowRenewals = null,
        \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType $partNumbers = null
    ) {
        $this->uniqueId = $uniqueId;
        $this->maintenanceName = $maintenanceName;
        $this->state = $state;
        $this->version = $version;
        $this->description = $description;
        $this->allowUpgrades = $allowUpgrades;
        $this->allowUpsells = $allowUpsells;
        $this->allowRenewals = $allowRenewals;
        $this->partNumbers = $partNumbers;
    }

    /**
     * create a new instance of this class
     *
     * @param string $uniqueId
     * @param string $maintenanceName
     * @param string $state
     * @param string $version
     * @param string $description
     * @param bool $allowUpgrades
     * @param bool $allowUpsells
     * @param bool $allowRenewals
     * @param \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType $partNumbers
     */
    public static function create(
        string $uniqueId,
        string $maintenanceName,
        string $state,
        string $version = null,
        string $description = null,
        bool $allowUpgrades = null,
        bool $allowUpsells = null,
        bool $allowRenewals = null,
        \Flexsim\FlexnetOperations\Type\PartNumbersSimpleListType $partNumbers = null
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
