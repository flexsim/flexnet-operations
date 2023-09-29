<?php

namespace Flexnet\EntitlementOrderService\Type;

class ChannelPartnerDataType
{
    /**
     * @var string
     */
    private $tierName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AccountIdentifierType
     */
    private $accountUnit;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null
     */
    private $contact;

    /**
     * @var bool|null
     */
    private $currentOwner;

    /**
     * Constructor
     */
    public function __construct(string $tierName, AccountIdentifierType $accountUnit, UserIdentifierType $contact = null, bool $currentOwner = null)
    {
        $this->tierName = $tierName;
        $this->accountUnit = $accountUnit;
        $this->contact = $contact;
        $this->currentOwner = $currentOwner;
    }

    public static function create(string $tierName, AccountIdentifierType $accountUnit, UserIdentifierType $contact = null, bool $currentOwner = null)
    {
        return new static(...\func_get_args());
    }

    public function getTierName(): string
    {
        return $this->tierName;
    }

    public function withTierName(string $tierName): ChannelPartnerDataType
    {
        $new = clone $this;
        $new->tierName = $tierName;

        return $new;
    }

    public function getAccountUnit(): AccountIdentifierType
    {
        return $this->accountUnit;
    }

    public function withAccountUnit(AccountIdentifierType $accountUnit): ChannelPartnerDataType
    {
        $new = clone $this;
        $new->accountUnit = $accountUnit;

        return $new;
    }

    public function getContact(): ?UserIdentifierType
    {
        return $this->contact;
    }

    public function withContact(?UserIdentifierType $contact): ChannelPartnerDataType
    {
        $new = clone $this;
        $new->contact = $contact;

        return $new;
    }

    public function getCurrentOwner(): ?bool
    {
        return $this->currentOwner;
    }

    public function withCurrentOwner(?bool $currentOwner): ChannelPartnerDataType
    {
        $new = clone $this;
        $new->currentOwner = $currentOwner;

        return $new;
    }
}
