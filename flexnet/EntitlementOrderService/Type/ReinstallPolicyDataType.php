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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType|null  $defaultPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType|null  $advancedPolicy
     */
    public function __construct(PolicyDataType|null $defaultPolicy = null, AdvancedReinstallPolicyType|null $advancedPolicy = null)
    {
        $this->defaultPolicy = $defaultPolicy;
        $this->advancedPolicy = $advancedPolicy;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType|null  $defaultPolicy
     * @param  \Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType|null  $advancedPolicy
     */
    public static function create(PolicyDataType|null $defaultPolicy = null, AdvancedReinstallPolicyType|null $advancedPolicy = null)
    {
        return new static(...\func_get_args());
    }

    public function getDefaultPolicy(): PolicyDataType|null
    {
        return $this->defaultPolicy;
    }

    public function withDefaultPolicy(PolicyDataType|null $defaultPolicy): ReinstallPolicyDataType
    {
        $new = clone $this;
        $new->defaultPolicy = $defaultPolicy;

        return $new;
    }

    public function getAdvancedPolicy(): AdvancedReinstallPolicyType|null
    {
        return $this->advancedPolicy;
    }

    public function withAdvancedPolicy(AdvancedReinstallPolicyType|null $advancedPolicy): ReinstallPolicyDataType
    {
        $new = clone $this;
        $new->advancedPolicy = $advancedPolicy;

        return $new;
    }
}
