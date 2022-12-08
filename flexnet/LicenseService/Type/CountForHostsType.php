<?php

namespace Flexnet\LicenseService\Type;

class CountForHostsType
{
    /**
     * @var string
     */
    private $hostDataRefId;

    /**
     * @var int
     */
    private $fulfillCount;

    /**
     * @var int|null
     */
    private $overDraftCount;

    /**
     * Constructor
     *
     * @param string $hostDataRefId
     * @param int $fulfillCount
     * @param int|null $overDraftCount
     */
    public function __construct(string $hostDataRefId, int $fulfillCount, int|null $overDraftCount = null)
    {
        $this->hostDataRefId = $hostDataRefId;
        $this->fulfillCount = $fulfillCount;
        $this->overDraftCount = $overDraftCount;
    }

    /**
     * @param string $hostDataRefId
     * @param int $fulfillCount
     * @param int|null $overDraftCount
     */
    public static function create(string $hostDataRefId, int $fulfillCount, int|null $overDraftCount = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getHostDataRefId() : string
    {
        return $this->hostDataRefId;
    }

    /**
     * @param string $hostDataRefId
     * @return CountForHostsType
     */
    public function withHostDataRefId(string $hostDataRefId) : \Flexnet\LicenseService\Type\CountForHostsType
    {
        $new = clone $this;
        $new->hostDataRefId = $hostDataRefId;

        return $new;
    }

    /**
     * @return int
     */
    public function getFulfillCount() : int
    {
        return $this->fulfillCount;
    }

    /**
     * @param int $fulfillCount
     * @return CountForHostsType
     */
    public function withFulfillCount(int $fulfillCount) : \Flexnet\LicenseService\Type\CountForHostsType
    {
        $new = clone $this;
        $new->fulfillCount = $fulfillCount;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getOverDraftCount() : int|null
    {
        return $this->overDraftCount;
    }

    /**
     * @param int|null $overDraftCount
     * @return CountForHostsType
     */
    public function withOverDraftCount(int|null $overDraftCount) : \Flexnet\LicenseService\Type\CountForHostsType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }
}

