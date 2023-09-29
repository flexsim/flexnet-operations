<?php

namespace Flexnet\EntitlementOrderService\Type;

class PartnerTierQueryType
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var string
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
    public function __construct(string $value, string $searchType, string $partnerTier = null, bool $isSearchByName = null)
    {
        $this->value = $value;
        $this->searchType = $searchType;
        $this->partnerTier = $partnerTier;
        $this->isSearchByName = $isSearchByName;
    }

    public static function create(string $value, string $searchType, string $partnerTier = null, bool $isSearchByName = null)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function withValue(string $value): PartnerTierQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): string
    {
        return $this->searchType;
    }

    public function withSearchType(string $searchType): PartnerTierQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }

    public function getPartnerTier(): ?string
    {
        return $this->partnerTier;
    }

    public function withPartnerTier(?string $partnerTier): PartnerTierQueryType
    {
        $new = clone $this;
        $new->partnerTier = $partnerTier;

        return $new;
    }

    public function getIsSearchByName(): ?bool
    {
        return $this->isSearchByName;
    }

    public function withIsSearchByName(?bool $isSearchByName): PartnerTierQueryType
    {
        $new = clone $this;
        $new->isSearchByName = $isSearchByName;

        return $new;
    }
}
