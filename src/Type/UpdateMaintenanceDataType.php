<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateMaintenanceDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType
     */
    private $maintenanceIdentifier;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $description;

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
     * @var \Flexsim\FlexnetOperations\Type\UpdatePartNumbersSimpleListType
     */
    private $partNumbers;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier
     * @var string $name
     * @var string $version
     * @var string $description
     * @var bool $allowUpgrades
     * @var bool $allowUpsells
     * @var bool $allowRenewals
     * @var \Flexsim\FlexnetOperations\Type\UpdatePartNumbersSimpleListType $partNumbers
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier, string $name = null, string $version = null, string $description = null, bool $allowUpgrades = null, bool $allowUpsells = null, bool $allowRenewals = null, \Flexsim\FlexnetOperations\Type\UpdatePartNumbersSimpleListType $partNumbers = null)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        $this->name = $name;
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
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier
     * @var string $name
     * @var string $version
     * @var string $description
     * @var bool $allowUpgrades
     * @var bool $allowUpsells
     * @var bool $allowRenewals
     * @var \Flexsim\FlexnetOperations\Type\UpdatePartNumbersSimpleListType $partNumbers
     */
    public static function create(\Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier, string $name = null, string $version = null, string $description = null, bool $allowUpgrades = null, bool $allowUpsells = null, bool $allowRenewals = null, \Flexsim\FlexnetOperations\Type\UpdatePartNumbersSimpleListType $partNumbers = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType
     */
    public function getMaintenanceIdentifier()
    {
        return $this->maintenanceIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier
     * @return $this
     */
    public function setMaintenanceIdentifier($maintenanceIdentifier)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return \Flexsim\FlexnetOperations\Type\UpdatePartNumbersSimpleListType
     */
    public function getPartNumbers()
    {
        return $this->partNumbers;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdatePartNumbersSimpleListType $partNumbers
     * @return $this
     */
    public function setPartNumbers($partNumbers)
    {
        $this->partNumbers = $partNumbers;
        return $this;
    }


}
