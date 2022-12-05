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
     * @param  string  $accountFrom
     * @param  string  $accountTo
     * @param  bool|null  $mergeUsers
     * @param  bool|null  $mergeEntitlements
     */
    public static function create(string $accountFrom, string $accountTo, bool|null $mergeUsers = null, bool|null $mergeEntitlements = null)
    {
        return new static(...\func_get_args());
    }

    public function __construct(string $accountFrom, string $accountTo, bool $mergeUsers, bool $mergeEntitlements)
    {
        $this->accountFrom = $accountFrom;
        $this->accountTo = $accountTo;
        $this->mergeUsers = $mergeUsers;
        $this->mergeEntitlements = $mergeEntitlements;
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

    public function getMergeUsers(): bool|null
    {
        return $this->mergeUsers;
    }

    public function withMergeUsers(bool|null $mergeUsers): MergeEntitlementsRequestType
    {
        $new = clone $this;
        $new->mergeUsers = $mergeUsers;

        return $new;
    }

    public function getMergeEntitlements(): bool|null
    {
        return $this->mergeEntitlements;
    }

    public function withMergeEntitlements(bool|null $mergeEntitlements): MergeEntitlementsRequestType
    {
        $new = clone $this;
        $new->mergeEntitlements = $mergeEntitlements;

        return $new;
    }
}