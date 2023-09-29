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
    public function __construct(StatusInfoType $statusInfo, AttributeMetaDescriptorDataType $entitlementAttributes = null, PolicyAttributesDataType $policyAttributes = null, bool $needTimeZone = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementAttributes = $entitlementAttributes;
        $this->policyAttributes = $policyAttributes;
        $this->needTimeZone = $needTimeZone;
    }

    public static function create(StatusInfoType $statusInfo, AttributeMetaDescriptorDataType $entitlementAttributes = null, PolicyAttributesDataType $policyAttributes = null, bool $needTimeZone = null)
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

    public function getEntitlementAttributes(): ?AttributeMetaDescriptorDataType
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(?AttributeMetaDescriptorDataType $entitlementAttributes): GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }

    public function getPolicyAttributes(): ?PolicyAttributesDataType
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(?PolicyAttributesDataType $policyAttributes): GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getNeedTimeZone(): ?bool
    {
        return $this->needTimeZone;
    }

    public function withNeedTimeZone(?bool $needTimeZone): GetEntitlementAttributesResponseType
    {
        $new = clone $this;
        $new->needTimeZone = $needTimeZone;

        return $new;
    }
}
