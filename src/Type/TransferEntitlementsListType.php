<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferEntitlementsListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType|array
     */
    protected $entitlementInfo;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType|array $entitlementInfo
     */
    public function __construct($entitlementInfo)
    {
        $this->entitlementInfo = $entitlementInfo;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType|array $entitlementInfo
     */
    public static function create($entitlementInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType|array
     */
    public function getEntitlementInfo()
    {
        return $this->entitlementInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType|array $entitlementInfo
     * @return $this
     */
    public function setEntitlementInfo($entitlementInfo)
    {
        $this->entitlementInfo = $entitlementInfo;

        return $this;
    }
}
