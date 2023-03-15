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

    /**
     * @return \Flexnet\EntitlementOrderService\Type\PolicyDataType|null
     */
    public function getDefaultPolicy(): PolicyDataType|null
    {
        return $this->defaultPolicy;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyDataType|null  $defaultPolicy
     */
    public function withDefaultPolicy(PolicyDataType|null $defaultPolicy): ReinstallPolicyDataType
    {
        $new = clone $this;
        $new->defaultPolicy = $defaultPolicy;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType|null
     */
    public function getAdvancedPolicy(): AdvancedReinstallPolicyType|null
    {
        return $this->advancedPolicy;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AdvancedReinstallPolicyType|null  $advancedPolicy
     */
    public function withAdvancedPolicy(AdvancedReinstallPolicyType|null $advancedPolicy): ReinstallPolicyDataType
    {
        $new = clone $this;
        $new->advancedPolicy = $advancedPolicy;

        return $new;
    }
}
