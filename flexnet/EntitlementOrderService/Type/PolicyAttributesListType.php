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
    public function __construct(PolicyDataType $rehostsPolicy = null, PolicyDataType $returnsPolicy = null, PolicyDataType $repairsPolicy = null, ExtraActivationDataType $extraActivationsPolicy = null, CancelLicensePolicyDataType $cancelLicensePolicy = null, VirtualLicensePolicyDataType $virtualLicensePolicy = null, ReinstallPolicyDataType $reinstallPolicy = null, AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy = null)
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

    public static function create(PolicyDataType $rehostsPolicy = null, PolicyDataType $returnsPolicy = null, PolicyDataType $repairsPolicy = null, ExtraActivationDataType $extraActivationsPolicy = null, CancelLicensePolicyDataType $cancelLicensePolicy = null, VirtualLicensePolicyDataType $virtualLicensePolicy = null, ReinstallPolicyDataType $reinstallPolicy = null, AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy = null)
    {
        return new static(...\func_get_args());
    }

    public function getRehostsPolicy(): ?PolicyDataType
    {
        return $this->rehostsPolicy;
    }

    public function withRehostsPolicy(?PolicyDataType $rehostsPolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->rehostsPolicy = $rehostsPolicy;

        return $new;
    }

    public function getReturnsPolicy(): ?PolicyDataType
    {
        return $this->returnsPolicy;
    }

    public function withReturnsPolicy(?PolicyDataType $returnsPolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->returnsPolicy = $returnsPolicy;

        return $new;
    }

    public function getRepairsPolicy(): ?PolicyDataType
    {
        return $this->repairsPolicy;
    }

    public function withRepairsPolicy(?PolicyDataType $repairsPolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->repairsPolicy = $repairsPolicy;

        return $new;
    }

    public function getExtraActivationsPolicy(): ?ExtraActivationDataType
    {
        return $this->extraActivationsPolicy;
    }

    public function withExtraActivationsPolicy(?ExtraActivationDataType $extraActivationsPolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->extraActivationsPolicy = $extraActivationsPolicy;

        return $new;
    }

    public function getCancelLicensePolicy(): ?CancelLicensePolicyDataType
    {
        return $this->cancelLicensePolicy;
    }

    public function withCancelLicensePolicy(?CancelLicensePolicyDataType $cancelLicensePolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->cancelLicensePolicy = $cancelLicensePolicy;

        return $new;
    }

    public function getVirtualLicensePolicy(): ?VirtualLicensePolicyDataType
    {
        return $this->virtualLicensePolicy;
    }

    public function withVirtualLicensePolicy(?VirtualLicensePolicyDataType $virtualLicensePolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->virtualLicensePolicy = $virtualLicensePolicy;

        return $new;
    }

    public function getReinstallPolicy(): ?ReinstallPolicyDataType
    {
        return $this->reinstallPolicy;
    }

    public function withReinstallPolicy(?ReinstallPolicyDataType $reinstallPolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->reinstallPolicy = $reinstallPolicy;

        return $new;
    }

    public function getAcpiGenerationIdLicensePolicy(): ?AcpiGenerationIdLicensePolicyDataType
    {
        return $this->acpiGenerationIdLicensePolicy;
    }

    public function withAcpiGenerationIdLicensePolicy(?AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->acpiGenerationIdLicensePolicy = $acpiGenerationIdLicensePolicy;

        return $new;
    }
}
