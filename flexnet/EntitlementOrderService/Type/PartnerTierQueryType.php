<?php

namespace Flexnet\EntitlementOrderService\Type;

class PartnerTierQueryType
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleSearchType
     */
    private $searchType;

    /**
     * @var string|null
     */
    private $partnerTier;

    /**
     * @var bool|null
     */
    private $isSearchByName;

    /**
     * Constructor
     */
    public function __construct(string $value, \Flexnet\EntitlementOrderService\Type\SimpleSearchType $searchType, ?string $partnerTier = null, ?bool $isSearchByName = null)
    {
        $this->value = $value;
        $this->searchType = $searchType;
        $this->partnerTier = $partnerTier;
        $this->isSearchByName = $isSearchByName;
    }

    public static function create(string $value, \Flexnet\EntitlementOrderService\Type\SimpleSearchType $searchType, ?string $partnerTier = null, ?bool $isSearchByName = null)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function withValue(string $value): \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\EntitlementOrderService\Type\SimpleSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\EntitlementOrderService\Type\SimpleSearchType $searchType): \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }

    public function getPartnerTier(): ?string
    {
        return $this->partnerTier;
    }

    public function withPartnerTier(?string $partnerTier): \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType
    {
        $new = clone $this;
        $new->partnerTier = $partnerTier;

        return $new;
    }

    public function getIsSearchByName(): ?bool
    {
        return $this->isSearchByName;
    }

    public function withIsSearchByName(?bool $isSearchByName): \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType
    {
        $new = clone $this;
        $new->isSearchByName = $isSearchByName;

        return $new;
    }
}
