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
    public function __construct(PolicyDataType $defaultPolicy = null, AdvancedReinstallPolicyType $advancedPolicy = null)
    {
        $this->defaultPolicy = $defaultPolicy;
        $this->advancedPolicy = $advancedPolicy;
    }

    public static function create(PolicyDataType $defaultPolicy = null, AdvancedReinstallPolicyType $advancedPolicy = null)
    {
        return new static(...\func_get_args());
    }

    public function getDefaultPolicy(): ?PolicyDataType
    {
        return $this->defaultPolicy;
    }

    public function withDefaultPolicy(?PolicyDataType $defaultPolicy): ReinstallPolicyDataType
    {
        $new = clone $this;
        $new->defaultPolicy = $defaultPolicy;

        return $new;
    }

    public function getAdvancedPolicy(): ?AdvancedReinstallPolicyType
    {
        return $this->advancedPolicy;
    }

    public function withAdvancedPolicy(?AdvancedReinstallPolicyType $advancedPolicy): ReinstallPolicyDataType
    {
        $new = clone $this;
        $new->advancedPolicy = $advancedPolicy;

        return $new;
    }
}
