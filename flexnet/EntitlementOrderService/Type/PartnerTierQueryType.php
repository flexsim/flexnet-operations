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
     *
     * @param  string  $value
     * @param  string  $searchType
     * @param  string|null  $partnerTier
     * @param  bool|null  $isSearchByName
     */
    public function __construct(string $value, string $searchType, string|null $partnerTier = null, bool|null $isSearchByName = null)
    {
        $this->value = $value;
        $this->searchType = $searchType;
        $this->partnerTier = $partnerTier;
        $this->isSearchByName = $isSearchByName;
    }

    /**
     * @param  string  $value
     * @param  string  $searchType
     * @param  string|null  $partnerTier
     * @param  bool|null  $isSearchByName
     */
    public static function create(string $value, string $searchType, string|null $partnerTier = null, bool|null $isSearchByName = null)
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

    public function getPartnerTier(): string|null
    {
        return $this->partnerTier;
    }

    public function withPartnerTier(string|null $partnerTier): PartnerTierQueryType
    {
        $new = clone $this;
        $new->partnerTier = $partnerTier;

        return $new;
    }

    public function getIsSearchByName(): bool|null
    {
        return $this->isSearchByName;
    }

    public function withIsSearchByName(bool|null $isSearchByName): PartnerTierQueryType
    {
        $new = clone $this;
        $new->isSearchByName = $isSearchByName;

        return $new;
    }
}
