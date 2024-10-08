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
     */
    public function __construct(string $hostDataRefId, int $fulfillCount, ?int $overDraftCount = null)
    {
        $this->hostDataRefId = $hostDataRefId;
        $this->fulfillCount = $fulfillCount;
        $this->overDraftCount = $overDraftCount;
    }

    public static function create(string $hostDataRefId, int $fulfillCount, ?int $overDraftCount = null)
    {
        return new static(...\func_get_args());
    }

    public function getHostDataRefId(): string
    {
        return $this->hostDataRefId;
    }

    public function withHostDataRefId(string $hostDataRefId): \Flexnet\LicenseService\Type\CountForHostsType
    {
        $new = clone $this;
        $new->hostDataRefId = $hostDataRefId;

        return $new;
    }

    public function getFulfillCount(): int
    {
        return $this->fulfillCount;
    }

    public function withFulfillCount(int $fulfillCount): \Flexnet\LicenseService\Type\CountForHostsType
    {
        $new = clone $this;
        $new->fulfillCount = $fulfillCount;

        return $new;
    }

    public function getOverDraftCount(): ?int
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(?int $overDraftCount): \Flexnet\LicenseService\Type\CountForHostsType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }
}
