<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEntitlementAttributesResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType
     */
    private $entitlementAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyAttributesDataType
     */
    private $policyAttributes;

    /**
     * @var bool
     */
    private $needTimeZone;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $entitlementAttributes
     * @var \Flexsim\FlexnetOperations\Type\PolicyAttributesDataType $policyAttributes
     * @var bool $needTimeZone
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $entitlementAttributes = null, \Flexsim\FlexnetOperations\Type\PolicyAttributesDataType $policyAttributes = null, bool $needTimeZone = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementAttributes = $entitlementAttributes;
        $this->policyAttributes = $policyAttributes;
        $this->needTimeZone = $needTimeZone;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $entitlementAttributes
     * @var \Flexsim\FlexnetOperations\Type\PolicyAttributesDataType $policyAttributes
     * @var bool $needTimeZone
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $entitlementAttributes = null, \Flexsim\FlexnetOperations\Type\PolicyAttributesDataType $policyAttributes = null, bool $needTimeZone = null)
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
     * @return \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType
     */
    public function getEntitlementAttributes()
    {
        return $this->entitlementAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $entitlementAttributes
     * @return $this
     */
    public function setEntitlementAttributes($entitlementAttributes)
    {
        $this->entitlementAttributes = $entitlementAttributes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyAttributesDataType
     */
    public function getPolicyAttributes()
    {
        return $this->policyAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PolicyAttributesDataType $policyAttributes
     * @return $this
     */
    public function setPolicyAttributes($policyAttributes)
    {
        $this->policyAttributes = $policyAttributes;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedTimeZone()
    {
        return $this->needTimeZone;
    }

    /**
     * @param bool $needTimeZone
     * @return $this
     */
    public function setNeedTimeZone($needTimeZone)
    {
        $this->needTimeZone = $needTimeZone;
        return $this;
    }


}
