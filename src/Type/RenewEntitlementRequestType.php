<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RenewEntitlementRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\RenewEntitlementDataType
     */
    protected $entitlementData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\RenewEntitlementDataType|array  $entitlementData
     */
    public function __construct($entitlementData = null)
    {
        $this->entitlementData = $entitlementData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\RenewEntitlementDataType|array  $entitlementData
     */
    public static function create($entitlementData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RenewEntitlementDataType
     */
    public function getEntitlementData()
    {
        return $this->entitlementData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\RenewEntitlementDataType  $entitlementData
     * @return $this
     */
    public function setEntitlementData($entitlementData)
    {
        $this->entitlementData = $entitlementData;

        return $this;
    }
}
