<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedMaintenanceDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedMaintenaceDataType
     */
    private $createdMaintenance;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedMaintenaceDataType|array $createdMaintenance
     */
    public function __construct($createdMaintenance = null)
    {
        $this->createdMaintenance = $createdMaintenance;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedMaintenaceDataType|array $createdMaintenance
     */
    public static function create($createdMaintenance = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedMaintenaceDataType
     */
    public function getCreatedMaintenance()
    {
        return $this->createdMaintenance;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedMaintenaceDataType $createdMaintenance
     * @return $this
     */
    public function setCreatedMaintenance($createdMaintenance)
    {
        $this->createdMaintenance = $createdMaintenance;
        return $this;
    }


}

