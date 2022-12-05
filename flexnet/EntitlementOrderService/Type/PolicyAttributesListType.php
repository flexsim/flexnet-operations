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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType|null  $rehostsPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType|null  $returnsPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType|null  $repairsPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\ExtraActivationDataType|null  $extraActivationsPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\CancelLicensePolicyDataType|null  $cancelLicensePolicy
     * @param  \Flexnet\EntitlementOrderService\Type\VirtualLicensePolicyDataType|null  $virtualLicensePolicy
     * @param  \Flexnet\EntitlementOrderService\Type\ReinstallPolicyDataType|null  $reinstallPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\AcpiGenerationIdLicensePolicyDataType|null  $acpiGenerationIdLicensePolicy
     */
    public function __construct(PolicyDataType|null $rehostsPolicy = null, PolicyDataType|null $returnsPolicy = null, PolicyDataType|null $repairsPolicy = null, ExtraActivationDataType|null $extraActivationsPolicy = null, CancelLicensePolicyDataType|null $cancelLicensePolicy = null, VirtualLicensePolicyDataType|null $virtualLicensePolicy = null, ReinstallPolicyDataType|null $reinstallPolicy = null, AcpiGenerationIdLicensePolicyDataType|null $acpiGenerationIdLicensePolicy = null)
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

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType|null  $rehostsPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType|null  $returnsPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType|null  $repairsPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\ExtraActivationDataType|null  $extraActivationsPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\CancelLicensePolicyDataType|null  $cancelLicensePolicy
     * @param  \Flexnet\EntitlementOrderService\Type\VirtualLicensePolicyDataType|null  $virtualLicensePolicy
     * @param  \Flexnet\EntitlementOrderService\Type\ReinstallPolicyDataType|null  $reinstallPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\AcpiGenerationIdLicensePolicyDataType|null  $acpiGenerationIdLicensePolicy
     */
    public static function create(PolicyDataType|null $rehostsPolicy = null, PolicyDataType|null $returnsPolicy = null, PolicyDataType|null $repairsPolicy = null, ExtraActivationDataType|null $extraActivationsPolicy = null, CancelLicensePolicyDataType|null $cancelLicensePolicy = null, VirtualLicensePolicyDataType|null $virtualLicensePolicy = null, ReinstallPolicyDataType|null $reinstallPolicy = null, AcpiGenerationIdLicensePolicyDataType|null $acpiGenerationIdLicensePolicy = null)
    {
        return new static(...\func_get_args());
    }

    public function getRehostsPolicy(): PolicyDataType|null
    {
        return $this->rehostsPolicy;
    }

    public function withRehostsPolicy(PolicyDataType|null $rehostsPolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->rehostsPolicy = $rehostsPolicy;

        return $new;
    }

    public function getReturnsPolicy(): PolicyDataType|null
    {
        return $this->returnsPolicy;
    }

    public function withReturnsPolicy(PolicyDataType|null $returnsPolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->returnsPolicy = $returnsPolicy;

        return $new;
    }

    public function getRepairsPolicy(): PolicyDataType|null
    {
        return $this->repairsPolicy;
    }

    public function withRepairsPolicy(PolicyDataType|null $repairsPolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->repairsPolicy = $repairsPolicy;

        return $new;
    }

    public function getExtraActivationsPolicy(): ExtraActivationDataType|null
    {
        return $this->extraActivationsPolicy;
    }

    public function withExtraActivationsPolicy(ExtraActivationDataType|null $extraActivationsPolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->extraActivationsPolicy = $extraActivationsPolicy;

        return $new;
    }

    public function getCancelLicensePolicy(): CancelLicensePolicyDataType|null
    {
        return $this->cancelLicensePolicy;
    }

    public function withCancelLicensePolicy(CancelLicensePolicyDataType|null $cancelLicensePolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->cancelLicensePolicy = $cancelLicensePolicy;

        return $new;
    }

    public function getVirtualLicensePolicy(): VirtualLicensePolicyDataType|null
    {
        return $this->virtualLicensePolicy;
    }

    public function withVirtualLicensePolicy(VirtualLicensePolicyDataType|null $virtualLicensePolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->virtualLicensePolicy = $virtualLicensePolicy;

        return $new;
    }

    public function getReinstallPolicy(): ReinstallPolicyDataType|null
    {
        return $this->reinstallPolicy;
    }

    public function withReinstallPolicy(ReinstallPolicyDataType|null $reinstallPolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->reinstallPolicy = $reinstallPolicy;

        return $new;
    }

    public function getAcpiGenerationIdLicensePolicy(): AcpiGenerationIdLicensePolicyDataType|null
    {
        return $this->acpiGenerationIdLicensePolicy;
    }

    public function withAcpiGenerationIdLicensePolicy(AcpiGenerationIdLicensePolicyDataType|null $acpiGenerationIdLicensePolicy): PolicyAttributesListType
    {
        $new = clone $this;
        $new->acpiGenerationIdLicensePolicy = $acpiGenerationIdLicensePolicy;

        return $new;
    }
}
