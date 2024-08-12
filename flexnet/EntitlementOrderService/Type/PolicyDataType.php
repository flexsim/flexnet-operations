<?php

namespace Flexnet\EntitlementOrderService\Type;

class PolicyDataType
{
    /**
     * @var int
     */
    private $allowedCount;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyTermType
     */
    private $policyTerm;

    /**
     * Constructor
     */
    public function __construct(int $allowedCount, \Flexnet\EntitlementOrderService\Type\PolicyTermType $policyTerm)
    {
        $this->allowedCount = $allowedCount;
        $this->policyTerm = $policyTerm;
    }

    public static function create(int $allowedCount, \Flexnet\EntitlementOrderService\Type\PolicyTermType $policyTerm)
    {
        return new static(...\func_get_args());
    }

    public function getAllowedCount(): int
    {
        return $this->allowedCount;
    }

    public function withAllowedCount(int $allowedCount): \Flexnet\EntitlementOrderService\Type\PolicyDataType
    {
        $new = clone $this;
        $new->allowedCount = $allowedCount;

        return $new;
    }

    public function getPolicyTerm(): \Flexnet\EntitlementOrderService\Type\PolicyTermType
    {
        return $this->policyTerm;
    }

    public function withPolicyTerm(\Flexnet\EntitlementOrderService\Type\PolicyTermType $policyTerm): \Flexnet\EntitlementOrderService\Type\PolicyDataType
    {
        $new = clone $this;
        $new->policyTerm = $policyTerm;

        return $new;
    }
}
