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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\PolicyDataType $umn1Policy, \Flexnet\EntitlementOrderService\Type\PolicyDataType $umn2Policy, \Flexnet\EntitlementOrderService\Type\PolicyDataType $umn3Policy, \Flexnet\EntitlementOrderService\Type\PolicyDataType $midPolicy)
    {
        $this->umn1Policy = $umn1Policy;
        $this->umn2Policy = $umn2Policy;
        $this->umn3Policy = $umn3Policy;
        $this->midPolicy = $midPolicy;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\PolicyDataType $umn1Policy, \Flexnet\EntitlementOrderService\Type\PolicyDataType $umn2Policy, \Flexnet\EntitlementOrderService\Type\PolicyDataType $umn3Policy, \Flexnet\EntitlementOrderService\Type\PolicyDataType $midPolicy)
    {
        return new static(...\func_get_args());
    }

    public function getUmn1Policy(): \Flexnet\EntitlementOrderService\Type\PolicyDataType
    {
        return $this->umn1Policy;
    }

    public function withUmn1Policy(\Flexnet\EntitlementOrderService\Type\PolicyDataType $umn1Policy): \Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType
    {
        $new = clone $this;
        $new->umn1Policy = $umn1Policy;

        return $new;
    }

    public function getUmn2Policy(): \Flexnet\EntitlementOrderService\Type\PolicyDataType
    {
        return $this->umn2Policy;
    }

    public function withUmn2Policy(\Flexnet\EntitlementOrderService\Type\PolicyDataType $umn2Policy): \Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType
    {
        $new = clone $this;
        $new->umn2Policy = $umn2Policy;

        return $new;
    }

    public function getUmn3Policy(): \Flexnet\EntitlementOrderService\Type\PolicyDataType
    {
        return $this->umn3Policy;
    }

    public function withUmn3Policy(\Flexnet\EntitlementOrderService\Type\PolicyDataType $umn3Policy): \Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType
    {
        $new = clone $this;
        $new->umn3Policy = $umn3Policy;

        return $new;
    }

    public function getMidPolicy(): \Flexnet\EntitlementOrderService\Type\PolicyDataType
    {
        return $this->midPolicy;
    }

    public function withMidPolicy(\Flexnet\EntitlementOrderService\Type\PolicyDataType $midPolicy): \Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType
    {
        $new = clone $this;
        $new->midPolicy = $midPolicy;

        return $new;
    }
}
