<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MergeEntitlementsRequestType implements RequestInterface
{
    /**
     * @var string
     */
    private $accountFrom;

    /**
     * @var string
     */
    private $accountTo;

    /**
     * @var bool|null
     */
    private $mergeUsers;

    /**
     * @var bool|null
     */
    private $mergeEntitlements;

    /**
     * Constructor
     */
    public function __construct(string $accountFrom, string $accountTo, bool $mergeUsers = null, bool $mergeEntitlements = null)
    {
        $this->accountFrom = $accountFrom;
        $this->accountTo = $accountTo;
        $this->mergeUsers = $mergeUsers;
        $this->mergeEntitlements = $mergeEntitlements;
    }

    public static function create(string $accountFrom, string $accountTo, bool $mergeUsers = null, bool $mergeEntitlements = null)
    {
        return new static(...\func_get_args());
    }

    public function getAccountFrom(): string
    {
        return $this->accountFrom;
    }

    public function withAccountFrom(string $accountFrom): MergeEntitlementsRequestType
    {
        $new = clone $this;
        $new->accountFrom = $accountFrom;

        return $new;
    }

    public function getAccountTo(): string
    {
        return $this->accountTo;
    }

    public function withAccountTo(string $accountTo): MergeEntitlementsRequestType
    {
        $new = clone $this;
        $new->accountTo = $accountTo;

        return $new;
    }

    public function getMergeUsers(): ?bool
    {
        return $this->mergeUsers;
    }

    public function withMergeUsers(?bool $mergeUsers): MergeEntitlementsRequestType
    {
        $new = clone $this;
        $new->mergeUsers = $mergeUsers;

        return $new;
    }

    public function getMergeEntitlements(): ?bool
    {
        return $this->mergeEntitlements;
    }

    public function withMergeEntitlements(?bool $mergeEntitlements): MergeEntitlementsRequestType
    {
        $new = clone $this;
        $new->mergeEntitlements = $mergeEntitlements;

        return $new;
    }
}
