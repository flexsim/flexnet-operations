<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransferEntitlementsRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferEntitlementsListType
     */
    private $entitlementList;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferEntitlementsListType $entitlementList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TransferEntitlementsListType $entitlementList)
    {
        $this->entitlementList = $entitlementList;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferEntitlementsListType $entitlementList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TransferEntitlementsListType $entitlementList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferEntitlementsListType
     */
    public function getEntitlementList()
    {
        return $this->entitlementList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferEntitlementsListType $entitlementList
     * @return $this
     */
    public function setEntitlementList($entitlementList)
    {
        $this->entitlementList = $entitlementList;
        return $this;
    }


}
