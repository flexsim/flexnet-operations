<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class GetEntitlementAttributesResponseType extends Result
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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorDataType $entitlementAttributes = null, ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesDataType $policyAttributes = null, ?bool $needTimeZone = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementAttributes = $entitlementAttributes;
        $this->policyAttributes = $policyAttributes;
        $this->needTimeZone = $needTimeZone;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorDataType $entitlementAttributes = null, ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesDataType $policyAttributes = null, ?bool $needTimeZone = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getEntitlementAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorDataType
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorDataType $entitlementAttributes): \Flexnet\EntitlementOrderService\Type\GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }

    public function getPolicyAttributes(): ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesDataType
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(?\Flexnet\EntitlementOrderService\Type\PolicyAttributesDataType $policyAttributes): \Flexnet\EntitlementOrderService\Type\GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getNeedTimeZone(): ?bool
    {
        return $this->needTimeZone;
    }

    public function withNeedTimeZone(?bool $needTimeZone): \Flexnet\EntitlementOrderService\Type\GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->needTimeZone = $needTimeZone;

        return $new;
    }
}
