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
    public function __construct(int $allowedCount, PolicyTermType $policyTerm)
    {
        $this->allowedCount = $allowedCount;
        $this->policyTerm = $policyTerm;
    }

    public static function create(int $allowedCount, PolicyTermType $policyTerm)
    {
        return new static(...\func_get_args());
    }

    public function getAllowedCount(): int
    {
        return $this->allowedCount;
    }

    public function withAllowedCount(int $allowedCount): PolicyDataType
    {
        $new = clone $this;
        $new->allowedCount = $allowedCount;

        return $new;
    }

    public function getPolicyTerm(): PolicyTermType
    {
        return $this->policyTerm;
    }

    public function withPolicyTerm(PolicyTermType $policyTerm): PolicyDataType
    {
        $new = clone $this;
        $new->policyTerm = $policyTerm;

        return $new;
    }
}
