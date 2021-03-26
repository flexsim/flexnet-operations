<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferEntitlementsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType
     */
    private $entitlementInfo;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType $entitlementInfo
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType $entitlementInfo)
    {
        $this->entitlementInfo = $entitlementInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType $entitlementInfo
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType $entitlementInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType
     */
    public function getEntitlementInfo()
    {
        return $this->entitlementInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType $entitlementInfo
     * @return $this
     */
    public function setEntitlementInfo($entitlementInfo)
    {
        $this->entitlementInfo = $entitlementInfo;
        return $this;
    }


}

