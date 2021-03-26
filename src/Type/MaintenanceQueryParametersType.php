<?php

namespace Flexsim\FlexnetOperations\Type;

class MaintenanceQueryParametersType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $maintenanceName;

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
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $version
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $version = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null, \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null)
    {
        $this->maintenanceName = $maintenanceName;
        $this->version = $version;
        $this->description = $description;
        $this->partNumber = $partNumber;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $version
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $version = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null, \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getMaintenanceName()
    {
        return $this->maintenanceName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceName
     * @return $this
     */
    public function setMaintenanceName($maintenanceName)
    {
        $this->maintenanceName = $maintenanceName;
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


}
