<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEntitlementAttributesResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorDataType|null
     */
    private $entitlementAttributes;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyAttributesDataType|null
     */
    private $policyAttributes;

    /**
     * @var bool|null
     */
    private $needTimeZone;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorDataType|null  $entitlementAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyAttributesDataType|null  $policyAttributes
     * @param  bool|null  $needTimeZone
     */
    public function __construct(StatusInfoType $statusInfo, AttributeMetaDescriptorDataType|null $entitlementAttributes = null, PolicyAttributesDataType|null $policyAttributes = null, bool|null $needTimeZone = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementAttributes = $entitlementAttributes;
        $this->policyAttributes = $policyAttributes;
        $this->needTimeZone = $needTimeZone;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorDataType|null  $entitlementAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyAttributesDataType|null  $policyAttributes
     * @param  bool|null  $needTimeZone
     */
    public static function create(StatusInfoType $statusInfo, AttributeMetaDescriptorDataType|null $entitlementAttributes = null, PolicyAttributesDataType|null $policyAttributes = null, bool|null $needTimeZone = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getEntitlementAttributes(): AttributeMetaDescriptorDataType|null
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(AttributeMetaDescriptorDataType|null $entitlementAttributes): GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }

    public function getPolicyAttributes(): PolicyAttributesDataType|null
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(PolicyAttributesDataType|null $policyAttributes): GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getNeedTimeZone(): bool|null
    {
        return $this->needTimeZone;
    }

    public function withNeedTimeZone(bool|null $needTimeZone): GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->needTimeZone = $needTimeZone;

        return $new;
    }
}