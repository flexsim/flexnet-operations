<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetMaintenanceLineItemStateResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType
     */
    private $failedMaintenanceData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType $failedMaintenanceData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType $failedMaintenanceData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedMaintenanceData = $failedMaintenanceData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType $failedMaintenanceData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType $failedMaintenanceData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType
     */
    public function getFailedMaintenanceData()
    {
        return $this->failedMaintenanceData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType $failedMaintenanceData
     * @return $this
     */
    public function setFailedMaintenanceData($failedMaintenanceData)
    {
        $this->failedMaintenanceData = $failedMaintenanceData;
        return $this;
    }


}

