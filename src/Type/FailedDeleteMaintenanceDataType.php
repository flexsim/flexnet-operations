<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteMaintenanceDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType
     */
    protected $maintenanceIdentifier;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     * @param  string  $reason
     */
    public function __construct(MaintenanceIdentifierType $maintenanceIdentifier, string $reason = null)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     * @param  string  $reason
     */
    public static function create(MaintenanceIdentifierType $maintenanceIdentifier, string $reason = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType  $maintenanceIdentifier
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
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
