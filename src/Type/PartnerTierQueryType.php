<?php

namespace Flexsim\FlexnetOperations\Type;

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
     * @var string
     */
    private $partnerTier;

    /**
     * Constructor
     *
     * @var string $value
     * @var string $searchType
     * @var string $partnerTier
     */
    public function __construct(string $value, string $searchType, string $partnerTier = null)
    {
        $this->value = $value;
        $this->searchType = $searchType;
        $this->partnerTier = $partnerTier;
    }

    /**
     * create a new instance of this class
     *
     * @var string $value
     * @var string $searchType
     * @var string $partnerTier
     */
    public static function create(string $value, string $searchType, string $partnerTier = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * @param string $searchType
     * @return $this
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerTier()
    {
        return $this->partnerTier;
    }

    /**
     * @param string $partnerTier
     * @return $this
     */
    public function setPartnerTier($partnerTier)
    {
        $this->partnerTier = $partnerTier;
        return $this;
    }


}

