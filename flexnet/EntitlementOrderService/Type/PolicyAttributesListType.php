<?php

namespace Flexnet\EntitlementOrderService\Type;

class PolicyAttributesListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyDataType|null
     */
    private $rehostsPolicy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyDataType|null
     */
    private $returnsPolicy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyDataType|null
     */
    private $repairsPolicy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ExtraActivationDataType|null
     */
    private $extraActivationsPolicy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CancelLicensePolicyDataType|null
     */
    private $cancelLicensePolicy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\VirtualLicensePolicyDataType|null
     */
    private $virtualLicensePolicy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ReinstallPolicyDataType|null
     */
    private $reinstallPolicy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AcpiGenerationIdLicensePolicyDataType|null
     */
    private $acpiGenerationIdLicensePolicy;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\PolicyDataType $rehostsPolicy = null, ?\Flexnet\EntitlementOrderService\Type\PolicyDataType $returnsPolicy = null, ?\Flexnet\EntitlementOrderService\Type\PolicyDataType $repairsPolicy = null, ?\Flexnet\EntitlementOrderService\Type\ExtraActivationDataType $extraActivationsPolicy = null, ?\Flexnet\EntitlementOrderService\Type\CancelLicensePolicyDataType $cancelLicensePolicy = null, ?\Flexnet\EntitlementOrderService\Type\VirtualLicensePolicyDataType $virtualLicensePolicy = null, ?\Flexnet\EntitlementOrderService\Type\ReinstallPolicyDataType $reinstallPolicy = null, ?\Flexnet\EntitlementOrderService\Type\AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy = null)
    {
        $this->rehostsPolicy = $rehostsPolicy;
        $this->returnsPolicy = $returnsPolicy;
        $this->repairsPolicy = $repairsPolicy;
        $this->extraActivationsPolicy = $extraActivationsPolicy;
        $this->cancelLicensePolicy = $cancelLicensePolicy;
        $this->virtualLicensePolicy = $virtualLicensePolicy;
        $this->reinstallPolicy = $reinstallPolicy;
        $this->acpiGenerationIdLicensePolicy = $acpiGenerationIdLicensePolicy;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\PolicyDataType $rehostsPolicy = null, ?\Flexnet\EntitlementOrderService\Type\PolicyDataType $returnsPolicy = null, ?\Flexnet\EntitlementOrderService\Type\PolicyDataType $repairsPolicy = null, ?\Flexnet\EntitlementOrderService\Type\ExtraActivationDataType $extraActivationsPolicy = null, ?\Flexnet\EntitlementOrderService\Type\CancelLicensePolicyDataType $cancelLicensePolicy = null, ?\Flexnet\EntitlementOrderService\Type\VirtualLicensePolicyDataType $virtualLicensePolicy = null, ?\Flexnet\EntitlementOrderService\Type\ReinstallPolicyDataType $reinstallPolicy = null, ?\Flexnet\EntitlementOrderService\Type\AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy = null)
    {
        return new static(...\func_get_args());
    }

    public function getRehostsPolicy(): ?\Flexnet\EntitlementOrderService\Type\PolicyDataType
    {
        return $this->rehostsPolicy;
    }

    public function withRehostsPolicy(?\Flexnet\EntitlementOrderService\Type\PolicyDataType $rehostsPolicy): \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        $new = clone $this;
        $new->rehostsPolicy = $rehostsPolicy;

        return $new;
    }

    public function getReturnsPolicy(): ?\Flexnet\EntitlementOrderService\Type\PolicyDataType
    {
        return $this->returnsPolicy;
    }

    public function withReturnsPolicy(?\Flexnet\EntitlementOrderService\Type\PolicyDataType $returnsPolicy): \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        $new = clone $this;
        $new->returnsPolicy = $returnsPolicy;

        return $new;
    }

    public function getRepairsPolicy(): ?\Flexnet\EntitlementOrderService\Type\PolicyDataType
    {
        return $this->repairsPolicy;
    }

    public function withRepairsPolicy(?\Flexnet\EntitlementOrderService\Type\PolicyDataType $repairsPolicy): \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        $new = clone $this;
        $new->repairsPolicy = $repairsPolicy;

        return $new;
    }

    public function getExtraActivationsPolicy(): ?\Flexnet\EntitlementOrderService\Type\ExtraActivationDataType
    {
        return $this->extraActivationsPolicy;
    }

    public function withExtraActivationsPolicy(?\Flexnet\EntitlementOrderService\Type\ExtraActivationDataType $extraActivationsPolicy): \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        $new = clone $this;
        $new->extraActivationsPolicy = $extraActivationsPolicy;

        return $new;
    }

    public function getCancelLicensePolicy(): ?\Flexnet\EntitlementOrderService\Type\CancelLicensePolicyDataType
    {
        return $this->cancelLicensePolicy;
    }

    public function withCancelLicensePolicy(?\Flexnet\EntitlementOrderService\Type\CancelLicensePolicyDataType $cancelLicensePolicy): \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        $new = clone $this;
        $new->cancelLicensePolicy = $cancelLicensePolicy;

        return $new;
    }

    public function getVirtualLicensePolicy(): ?\Flexnet\EntitlementOrderService\Type\VirtualLicensePolicyDataType
    {
        return $this->virtualLicensePolicy;
    }

    public function withVirtualLicensePolicy(?\Flexnet\EntitlementOrderService\Type\VirtualLicensePolicyDataType $virtualLicensePolicy): \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        $new = clone $this;
        $new->virtualLicensePolicy = $virtualLicensePolicy;

        return $new;
    }

    public function getReinstallPolicy(): ?\Flexnet\EntitlementOrderService\Type\ReinstallPolicyDataType
    {
        return $this->reinstallPolicy;
    }

    public function withReinstallPolicy(?\Flexnet\EntitlementOrderService\Type\ReinstallPolicyDataType $reinstallPolicy): \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        $new = clone $this;
        $new->reinstallPolicy = $reinstallPolicy;

        return $new;
    }

    public function getAcpiGenerationIdLicensePolicy(): ?\Flexnet\EntitlementOrderService\Type\AcpiGenerationIdLicensePolicyDataType
    {
        return $this->acpiGenerationIdLicensePolicy;
    }

    public function withAcpiGenerationIdLicensePolicy(?\Flexnet\EntitlementOrderService\Type\AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy): \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        $new = clone $this;
        $new->acpiGenerationIdLicensePolicy = $acpiGenerationIdLicensePolicy;

        return $new;
    }
}
