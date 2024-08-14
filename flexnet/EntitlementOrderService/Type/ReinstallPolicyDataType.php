<?php

namespace Flexnet\EntitlementOrderService\Type;

class ReinstallPolicyDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyDataType|null
     */
    private $defaultPolicy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType|null
     */
    private $advancedPolicy;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\PolicyDataType $defaultPolicy = null, ?\Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType $advancedPolicy = null)
    {
        $this->defaultPolicy = $defaultPolicy;
        $this->advancedPolicy = $advancedPolicy;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\PolicyDataType $defaultPolicy = null, ?\Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType $advancedPolicy = null)
    {
        return new static(...\func_get_args());
    }

    public function getDefaultPolicy(): ?\Flexnet\EntitlementOrderService\Type\PolicyDataType
    {
        return $this->defaultPolicy;
    }

    public function withDefaultPolicy(?\Flexnet\EntitlementOrderService\Type\PolicyDataType $defaultPolicy): \Flexnet\EntitlementOrderService\Type\ReinstallPolicyDataType
    {
        $new = clone $this;
        $new->defaultPolicy = $defaultPolicy;

        return $new;
    }

    public function getAdvancedPolicy(): ?\Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType
    {
        return $this->advancedPolicy;
    }

    public function withAdvancedPolicy(?\Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType $advancedPolicy): \Flexnet\EntitlementOrderService\Type\ReinstallPolicyDataType
    {
        $new = clone $this;
        $new->advancedPolicy = $advancedPolicy;

        return $new;
    }
}
