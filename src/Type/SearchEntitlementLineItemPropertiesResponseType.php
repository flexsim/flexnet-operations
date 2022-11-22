<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchEntitlementLineItemPropertiesResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemPropertiesType
     */
    protected $entitlementLineItem;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemPropertiesType|array  $entitlementLineItem
     */
    public function __construct(StatusInfoType $statusInfo, $entitlementLineItem = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementLineItem = $entitlementLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemPropertiesType|array  $entitlementLineItem
     */
    public static function create(StatusInfoType $statusInfo, $entitlementLineItem = null)
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
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemPropertiesType
     */
    public function getEntitlementLineItem()
    {
        return $this->entitlementLineItem;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemPropertiesType  $entitlementLineItem
     * @return $this
     */
    public function setEntitlementLineItem($entitlementLineItem)
    {
        $this->entitlementLineItem = $entitlementLineItem;

        return $this;
    }
}
