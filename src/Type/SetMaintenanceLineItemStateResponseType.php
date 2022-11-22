<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetMaintenanceLineItemStateResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType
     */
    protected $failedMaintenanceData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType  $failedMaintenanceData
     */
    public function __construct(StatusInfoType $statusInfo, FailedMaintenanceLineItemStateDataListType $failedMaintenanceData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedMaintenanceData = $failedMaintenanceData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType  $failedMaintenanceData
     */
    public static function create(StatusInfoType $statusInfo, FailedMaintenanceLineItemStateDataListType $failedMaintenanceData = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
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
     * @param  \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataListType  $failedMaintenanceData
     * @return $this
     */
    public function setFailedMaintenanceData($failedMaintenanceData)
    {
        $this->failedMaintenanceData = $failedMaintenanceData;

        return $this;
    }
}
