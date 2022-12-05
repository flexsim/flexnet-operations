<?php

namespace Flexnet\EntitlementOrderService\Type;

class AdvancedReinstallPolicyType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyDataType
     */
    private $umn1Policy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyDataType
     */
    private $umn2Policy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyDataType
     */
    private $umn3Policy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyDataType
     */
    private $midPolicy;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType  $umn1Policy
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType  $umn2Policy
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType  $umn3Policy
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType  $midPolicy
     */
    public function __construct(PolicyDataType $umn1Policy, PolicyDataType $umn2Policy, PolicyDataType $umn3Policy, PolicyDataType $midPolicy)
    {
        $this->umn1Policy = $umn1Policy;
        $this->umn2Policy = $umn2Policy;
        $this->umn3Policy = $umn3Policy;
        $this->midPolicy = $midPolicy;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType  $umn1Policy
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType  $umn2Policy
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType  $umn3Policy
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType  $midPolicy
     */
    public static function create(PolicyDataType $umn1Policy, PolicyDataType $umn2Policy, PolicyDataType $umn3Policy, PolicyDataType $midPolicy)
    {
        return new static(...\func_get_args());
    }

    public function getUmn1Policy(): PolicyDataType
    {
        return $this->umn1Policy;
    }

    public function withUmn1Policy(PolicyDataType $umn1Policy): AdvancedReinstallPolicyType
    {
        $new = clone $this;
        $new->umn1Policy = $umn1Policy;

        return $new;
    }

    public function getUmn2Policy(): PolicyDataType
    {
        return $this->umn2Policy;
    }

    public function withUmn2Policy(PolicyDataType $umn2Policy): AdvancedReinstallPolicyType
    {
        $new = clone $this;
        $new->umn2Policy = $umn2Policy;

        return $new;
    }

    public function getUmn3Policy(): PolicyDataType
    {
        return $this->umn3Policy;
    }

    public function withUmn3Policy(PolicyDataType $umn3Policy): AdvancedReinstallPolicyType
    {
        $new = clone $this;
        $new->umn3Policy = $umn3Policy;

        return $new;
    }

    public function getMidPolicy(): PolicyDataType
    {
        return $this->midPolicy;
    }

    public function withMidPolicy(PolicyDataType $midPolicy): AdvancedReinstallPolicyType
    {
        $new = clone $this;
        $new->midPolicy = $midPolicy;

        return $new;
    }
}
