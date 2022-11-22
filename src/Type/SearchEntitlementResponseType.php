<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchEntitlementResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementDataType
     */
    protected $entitlement;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementDataType|array  $entitlement
     */
    public function __construct(StatusInfoType $statusInfo, $entitlement = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlement = $entitlement;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementDataType|array  $entitlement
     */
    public static function create(StatusInfoType $statusInfo, $entitlement = null)
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
     * @return \Flexsim\FlexnetOperations\Type\EntitlementDataType
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementDataType  $entitlement
     * @return $this
     */
    public function setEntitlement($entitlement)
    {
        $this->entitlement = $entitlement;

        return $this;
    }
}
