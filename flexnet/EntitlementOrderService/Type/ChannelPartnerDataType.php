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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $accountUnit
     * @param  \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null  $contact
     * @param  bool|null  $currentOwner
     */
    public function __construct(string $tierName, AccountIdentifierType $accountUnit, UserIdentifierType|null $contact = null, bool|null $currentOwner = null)
    {
        $this->tierName = $tierName;
        $this->accountUnit = $accountUnit;
        $this->contact = $contact;
        $this->currentOwner = $currentOwner;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $accountUnit
     * @param  \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null  $contact
     * @param  bool|null  $currentOwner
     */
    public static function create(string $tierName, AccountIdentifierType $accountUnit, UserIdentifierType|null $contact = null, bool|null $currentOwner = null)
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

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AccountIdentifierType
     */
    public function getAccountUnit(): AccountIdentifierType
    {
        return $this->accountUnit;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType  $accountUnit
     */
    public function withAccountUnit(AccountIdentifierType $accountUnit): ChannelPartnerDataType
    {
        $new = clone $this;
        $new->accountUnit = $accountUnit;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null
     */
    public function getContact(): UserIdentifierType|null
    {
        return $this->contact;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UserIdentifierType|null  $contact
     */
    public function withContact(UserIdentifierType|null $contact): ChannelPartnerDataType
    {
        $new = clone $this;
        $new->contact = $contact;

        return $new;
    }

    public function getCurrentOwner(): bool|null
    {
        return $this->currentOwner;
    }

    public function withCurrentOwner(bool|null $currentOwner): ChannelPartnerDataType
    {
        $new = clone $this;
        $new->currentOwner = $currentOwner;

        return $new;
    }
}
